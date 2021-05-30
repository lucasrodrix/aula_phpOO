<?php
declare(strict_types=1);

class Produto{
    private $conn;

    public function __construct(){
        try {
            $this->conn = new PDO("pgsql:host=localhost;port=5432;dbname=exemplo;user=postgres;password=rodrix3301");
        } catch (Exception $e){
            echo $e->getMessage();
            die();
        }
    }

    public function listar():array{
        $sql = 'SELECT id, descricao from produtos ORDER BY id ASC';
        $produtos = [];

        foreach ($this->conn->query($sql) as $key => $value) {
            array_push($produtos, $value);
        }
        return $produtos;
    }

    public function inserir(int $id, string $descricao){
        $sql = 'INSERT INTO produtos (id, descricao) VALUES (?,?)';

        $prepare = $this->conn->prepare($sql);
        
        $prepare->bindParam(1, $id);
        $prepare->bindParam(2, $descricao);
        $prepare->execute();

        return $prepare->rowCount();
    }
    
    public function atualizar(string $descricao, int $id){
        $sql = 'UPDATE produtos SET descricao =? WHERE id = ?';

        $prepare = $this->conn->prepare($sql);
        
        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function deletar(int $id){
        $sql = 'DELETE FROM produtos WHERE id = ?';

        $prepare = $this->conn->prepare($sql);
        
        $prepare->bindParam(1, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }

}