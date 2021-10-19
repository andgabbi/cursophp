<?php

function defineCategory ($name, $age) : ?string {

$category = ['infantil', 'adolescente', 'adulto'];

    if (validationName($name) && validationAge($age)) {
        removeErrorMessage();
        
        if($age >= 6 && $age <= 12) {
            for ($i = 0; $i < count($category); $i++) {
                if($category[$i] == 'infantil') {
                    setMessageSuccess('O nadador ' . $name .  ' pertence a categoria ' . $category[$i]);
                    return null;
                }
            }
        }   
        else if ($age >= 13 && $age < 18) {
            for ($i = 0; $i < count($category); $i++) {
                if($category[$i] == 'adolescente') {
                    setMessageSuccess('O nadador ' . $name .  ' pertence a categoria ' . $category[$i]);
                    return null; 
                }
            }
        }
        else {  
            for ($i = 0; $i < count($category); $i++) {
                if($category[$i] == 'adulto') {
                    setMessageSuccess('O nadador ' . $name .  ' pertence a categoria ' . $category[$i]);
                    return null;
                }
            }
        }
    }
    else {
        removeSuccessMessage();
        return getMessageError();
    }
};