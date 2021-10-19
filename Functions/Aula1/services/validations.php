<?php

    function validationName ($name) : bool {
        if (empty($name)) {
            setMessageError('O nome não pode ser vazio.');
            return false;
        }
        else if (strlen($name) < 3){
            setMessageError('O nome deve conter mais que 3 caracteres.');
            return false;
        }
        else if(strlen($name) > 40) {
           setMessageError('O nome não pode conter mais que 40 caracteres.');
            return false;
        };
        return true;
    };

    function validationAge ($age) {
        if (!is_numeric($age)){
            setMessageError('A idade não pode ser vazia.');
            return false;
        }
        return true;
    };

?>