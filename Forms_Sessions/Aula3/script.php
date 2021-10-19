<?php

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];


    $categorias = ['infantil', 'adolescente', 'adulto'];

    if (empty ($nome)) {
        echo 'O nome não pode ser vazio.';
        return;
    }

    if(strlen($nome) < 3){
        echo 'o nome deve conter mais que 3 caracteres.';
        return;
    }

    if(strlen($nome) > 40) {
        echo 'O nome é muito extenso.';
        return;
    }

    if($idade >= 6 && $idade <= 12) {
        for ($i = 0; $i < count($categorias); $i++) {
            if($categorias[$i] == 'infantil') {
                echo('O nadador ' . $nome .  ' pertence a categoria ' . $categorias[$i]);
            }
        }
    }
    else if ($idade >= 13 && $idade < 18) {
        for ($i = 0; $i < count($categorias); $i++) {
            if($categorias[$i] == 'adolescente') {
                echo('O nadador ' . $nome .  ' pertence a categoria ' . $categorias[$i]);
            }
        }
    }
    else {  
        for ($i = 0; $i < count($categorias); $i++) {
            if($categorias[$i] == 'adulto') {
                echo('O nadador ' . $nome .  ' pertence a categoria ' . $categorias[$i]);
            }
        }
    }

?>