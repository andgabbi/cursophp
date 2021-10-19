<?php

    session_start();

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];


    $categorias = ['infantil', 'adolescente', 'adulto'];

    if($idade >= 6 && $idade <= 12) {
        for ($i = 0; $i < count($categorias); $i++) {
            if($categorias[$i] == 'infantil') {
                $_SESSION['MsgSuccess'] = 'O nadador ' . $nome .  ' pertence a categoria ' . $categorias[$i];
                header('location: index.php');
                return;
            }
        }
    }
    else if ($idade >= 13 && $idade < 18) {
        for ($i = 0; $i < count($categorias); $i++) {
            if($categorias[$i] == 'adolescente') {
                $_SESSION['MsgSuccess'] = 'O nadador ' . $nome .  ' pertence a categoria ' . $categorias[$i];
                header('location: index.php');
                return;
            }
        }
    }
    else {  
        for ($i = 0; $i < count($categorias); $i++) {
            if($categorias[$i] == 'adulto') {
                $_SESSION['MsgSuccess'] = 'O nadador ' . $nome .  ' pertence a categoria ' . $categorias[$i];
                header('location: index.php');
                return;
            }
        }
    }

?>