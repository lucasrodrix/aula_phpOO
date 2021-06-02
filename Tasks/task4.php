<?php
declare(strict_types=1);

require ".\Blog\Post.php";
$post = new \Post();

switch ($_GET['operacao']) {
    case 'listar':
        foreach ($post->listar() as $key => $value) {
            echo '<h6>ID: '.$value['id'].'</h6></br> <h3>Título: '.$value['titulo'].'</h3>'.'</br><p>'.$value['conteudo'].'<hr>';
        }
        break;
    case 'inserir':
        $status = $post->inserir(4, 'O Meu Amado Enteado', 'Andreas Freitas');

        if(!$status){
            echo "Não foi possível realizar a operação!";
            return false;
        }
        echo "Registro Inserido com Sucesso!";
        break;
    case 'atualizar':
        $status = $post->atualizar('O Meu Amado Enteado', 'Andreas Rodrix', 4);

        if(!$status){
            echo "Não foi possível realizar a operação!";
            return false;
        }
        echo "Registro Atualizado com Sucesso!";
        break;
    case 'deletar':
        $status = $post->deletar(4);
        
        if(!$status){
            echo "Não foi possível realizar a operação!";
            return false;
        }
        echo "Registro Deletado com Sucesso!";        
        break;
}