<?php

function validarUsuario(array $usuario){
    if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])){
        throw new Exception("\nCampos Obrigatórios não Informados.\n");
    }
    return true;
}

$usuario = ['código' => 001, 'nome' => 'Lucas Rodrix', 'idade' => 36];

$status = false;

try {
    $status = validarUsuario($usuario);
} catch (Exception $e) {
    echo $e->getMessage();
}finally{
    echo "Status da Operação: ".(int)$status.PHP_EOL;
    die();
}

echo "\n... EXECUTANDO ...\n";