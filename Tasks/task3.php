<?php
declare(strict_types=1);

// Crie uma funcção chamada DIVISAO que deverá receber dois numeros
// Na função, verifique se algum dos números é igual 0.
// Caso positivo lance uma exceção.
// Execute a função divisao e forcea exceção. 
// Realize o tratamento e captura através do TryCatch.

function divisao(int $valor1, int $valor2){
    if($valor1 == 0 || $valor2 == 0){
        throw new Exception("\nValor não pode ser 0(zero)");
    }
    return $resultado = $valor1 / $valor2;
}

try {
    $resultado = divisao(30,8);
} catch (\Exception $e) {
    echo $e->getMessage();
    die();
}finally{
    echo "Resultado: ".$resultado."<br/>";
    die();
}