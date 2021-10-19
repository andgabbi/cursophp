<?php

function divisao (int $valor1, int $valor2)
{
    if ( $valor1 == 0 || $valor2 == 0 ){
        throw new Exception ('Valor 0 (zero) não pode ser inserido.');
    }
    echo 'O valor da divisão de '. $valor1 . ' e ' . $valor2 . ' é ' .$valor1 / $valor2;
}

$valor1 = 10; 
$valor2 = 0;

$status = false;

try {
    $status = divisao($valor1, $valor2);
}
catch (Exception $e) {
    echo $e->getMessage();
}
finally {
    echo '<br>Status da operação: ' . (int)$status;
    die();
}
