<?php

require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {
    case 'list':
        echo '<h3> Produtos </h3>';

        foreach ($produto->list() as $value)
        {
            echo 'Id: ' . $value['id'] . '<br>Descrição: ' . $value['descricao'] . '<hr>';
        }
        break;
        
    case 'insert':
        $status =  $produto->insert('Produto09');

        if(!$status){
            echo 'Não foi possível adicionar o produto.';
            return false;
        }
        echo 'Produto adicionado com sucesso.';
        break;
    
    case 'update':
        $status =  $produto->update('Produto Alterado 01', 1);

        if(!$status){
            echo 'Não foi possível alterar o produto.';
            return false;
        }
        echo 'Produto alterado com sucesso.';
        break;
    
    case 'delete':
        $status =  $produto->delete(1);

        if(!$status){
            echo 'Não foi possível deletar o produto.';
            return false;
        }
        echo 'Produto deletado com sucesso.';
        break;
}