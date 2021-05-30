<?php
declare(strict_types=1);

class ContaBancaria{
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldoConta;

    public function __construct(
        string $banco, 
        string $nomeTitular, 
        string $numeroAgencia, 
        string $numeroConta, 
        float $saldoConta
    ){
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldoConta = $saldoConta;
        
    }

    public function obterSaldo(){
        return "\nSeu Saldo atual é R$ :".$this->saldoConta;
    }

    public function depositar(float $valor){
        $this->saldoConta += $valor;
        return "\nDepósito de R$ ".$valor." realizado em sua Conta Corrente!";
    }

    public function sacar(float $valor){
        $this->saldoConta -= $valor;
        return "\nSaque de R$ ".$valor." realizado em sua Conta Corrente!";
    }
}

$conta = new ContaBancaria("Banco Rodrix", "Lucas Rodrix", "3301-0", "220685-0", 0.00);

echo $conta->obterSaldo()."</br>";
echo $conta->depositar(200.00)."</br>";
echo $conta->obterSaldo()."</br>";
echo $conta->sacar(100.00)."</br>";
echo $conta->obterSaldo()."</br>";