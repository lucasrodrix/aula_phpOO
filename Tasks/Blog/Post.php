<?php
declare(strict_types=1);

class Post{
    private $conn;

    public function __construct(){
        try {
            $this->conn = new PDO("pgsql:host=localhost;port=5432;dbname=blog;user=postgres;password=rodrix3301");
        } catch (Exception $e){
            echo $e->getMessage();
            die();
        }
    }

    public function listar():array{
        $sql = "SELECT id, titulo, conteudo FROM posts ORDER BY id ASC";
        $posts = [];

        foreach ($this->conn->query($sql) as $key => $value) {
            array_push($posts, $value);
        }
        return $posts;
    }
    public function inserir(int $id, string $titulo, string $conteudo){
        $sql = 'INSERT INTO posts (id, titulo, conteudo ) VALUES (?,?,?)';

        $prepare = $this->conn->prepare($sql);
        
        $prepare->bindParam(1, $id);
        $prepare->bindParam(2, $titulo);
        $prepare->bindParam(3, $conteudo);
        $prepare->execute();

        return $prepare->rowCount();      
    }
    public function atualizar(string $titulo, string $conteudo, int $id){
        $sql = 'UPDATE posts SET titulo = ?,conteudo = ? WHERE id = ?';

        $prepare = $this->conn->prepare($sql);
        
        $prepare->bindParam(1, $titulo);
        $prepare->bindParam(2, $conteudo);
        $prepare->bindParam(3, $id);
        $prepare->execute();

        return $prepare->rowCount();        
    }
    public function deletar(int $id){
        $sql = 'DELETE FROM posts WHERE id = ?';

        $prepare = $this->conn->prepare($sql);
        
        $prepare->bindParam(1, $id);
        $prepare->execute();

        return $prepare->rowCount();                
    }
}