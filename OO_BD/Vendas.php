<?php

declare(strict_types=1);

class Venda 
{
    private string $data;
    private string $produto;
    private int $quantidade;
    private float $valorTotal;

    public function __construct(
        string $data,
        string $produto,
        int $quantidade,
        float $valorTotal
        
    )
    {
        $this->data = $data;
        $this->produtos = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function mostrarVenda() : string
    {
        return (
            'Data da venda: ' . $this->data . '<br>' .
            'Produto comprado: ' . $this->produtos . '<br>' .
            'Quantidade do produto: ' . $this->quantidade . '<br>' 
        );
    }

    public function valorTotalVenda(float $valorProduto)
    {
        $this->valorTotal = $valorProduto * $this->quantidade;
        return (
            'Valor do produto: R$' . $valorProduto . '<br>' .
            'Total da venda: R$' . $this->valorTotal
        );
    }
}


$venda1 = new Venda ( 
    '12/07/2021',
    'Mouse',
    3,
    0.00
);

echo $venda1->mostrarVenda();
echo $venda1->valorTotalVenda(10.00);

