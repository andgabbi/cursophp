<?php

    function validation_name ($nome) : bool {
        if (empty($nome)) {
            $_SESSION['MsgErro'] = 'O nome não pode ser vazio.';
            return false;
        }
        else if (strlen($nome) > 40){
            $_SESSION['MsgErro'] = 'O nome deve conter mais que 3 caracteres.';
            return false;
        }
        else if(strlen($nome) > 40) {
            $_SESSION['MsgErro'] = 'O nome não pode conter mais que 40 caracteres.';
            return false;
        };
        return true;
    };

    function validation_age ($idade) {
        if (!is_numeric($idade)){
            $_SESSION['MsgErro'] = 'A idade não pode ser vazia.';
            return;
        }
    };
?>