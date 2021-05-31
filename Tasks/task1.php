<?php
declare(strict_types=1);

// Crie uma classe chamada VENDA com os atributos privados, 'data', 'produto',  e 'valor total'.
// Crie um método capaz de exibir os dados da venda
// Crie uma instancia da classe e passe os atributos através de um método construtor, em seguida, invoque o método responsável por exibir o conteudo da venda devidamente formatado.

class Vendas{
    private string $data;
    private string $produto;
    private float $valor;
    private float $valorTotal;

    public function __construct(string $data, string $produto, float $valor,  float $valorTotal){
        $this->data = date('d/m/Y');
        $this->produto = $produto;
        $this->valor = $valor;
        $this->valorTotal = $valorTotal;
    }

    public function vendas(){
        return "\nSeu Saldo de vendas atual é de R$ ".$this->valorTotal;
    }

    public function vender(string $data, string $produto, float $valor){
        $this->valorTotal += $valor;
        return "\nVenda de ".$produto." no valor de R$ ".$valor." em produtos realizada no dia ".$data.".";
    }
}

$venda = new Vendas(date('d/m/Y'), "", 0.00, 0.00);

echo $venda->vendas()."</br>";
echo $venda->vender((date('d/m/Y H:m:s')), "Notebook", 100.00)."</br>";
echo $venda->vendas()."</br>";
echo $venda->vender(date('d/m/Y H:m:s'), "Monitor", 500.00)."</br>";
echo $venda->vendas()."</br>";
