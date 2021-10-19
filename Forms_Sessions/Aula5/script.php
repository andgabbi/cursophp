<?php

    session_start();

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];


    $categorias = ['infantil', 'adolescente', 'adulto'];

    if (empty ($nome)) {
        $_SESSION['MsgErro'] = 'O nome não pode ser vazio';
        header('location: index.php');
        return;
    }

    else if(strlen($nome) < 3){
        $_SESSION['MsgErro'] = 'O nome deve conter mais que 3 caracteres';
        header('location: index.php'); 
        return;
    }

    else if(strlen($nome) > 40) {
        $_SESSION['MsgErro'] = 'O nome não pode conter mais que 40 caracteres.';
        header('location: index.php');
        return;
    }

    else if (!is_numeric($idade)){
        $_SESSION['MsgErro'] = 'A idade não pode ser vazia..';
        header('location: index.php');
        return;
    }



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