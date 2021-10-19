<?php

declare(strict_types=1);

class ContaBancaria 
{
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function __construct(
        string $banco, 
        string $nomeTitular, 
        string $numeroAgencia,
        string $numeroConta, 
        float $saldo
        )
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo; 
    }

    public function obterSaldo() : string
    {
        return 'Seu saldo atual é R$' . $this->saldo;
    }

    public function depositar(float $deposito) : string
    {
        $this->saldo += $deposito;
        return 'Depósito de R$' . $deposito . ' realizado.';
    }

    public function sacar(float $valor) : string 
    {
        $this->saldo -= $valor;
        return 'Saque de R$' . $valor . ' realizado.';
    }
}

$conta1 = new ContaBancaria(
    'Banco do Brasil',
    'gabriele',
    '6545',
    '854756-31',
    0.00
);
var_dump($conta1);

$conta2 = new ContaBancaria(
    'Banco do Brasil',
    'gabriele',
    '6545',
    '854756-31',
    0.00
);var_dump($conta2);


/*
echo $conta->obterSaldo();
echo '<br>';
echo $conta->depositar(300.00);
echo '<br>';
echo $conta->obterSaldo();
echo '<br>';
echo $conta->sacar(100.00);
echo '<br>';
echo $conta->obterSaldo();
*/



