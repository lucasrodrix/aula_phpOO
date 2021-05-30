<?php
declare(strict_types=1);

require ".\Store\Produtos.php";
$produto = new Produto();

switch ($_GET['operacao']) {
    case 'listar':
        foreach ($produto->listar() as $key => $value) {
            echo 'ID: '.$value['id'].'</br> Descrição: '.$value['descricao'].'<hr>';
        }
    break;

    case 'inserir':
        $status = $produto->inserir(1, 'PC POSITIVO');

        if(!$status){
            echo "Não foi possível realizar a operação!";
            return false;
        }
        echo "Registro Inserido com Sucesso!";
    break;

    case 'atualizar':
        $status = $produto->atualizar('PC LENOVO',1);

        if(!$status){
            echo "Não foi possível realizar a operação!";
            return false;
        }
        echo "Registro Atualizado com Sucesso!";
    break;

    case 'deletar':
        $status = $produto->deletar(3);

        if(!$status){
            echo "Não foi possível realizar a operação!";
            return false;
        }
        echo "Registro Removido com Sucesso!";
    break;
}