<?php

function validaUsuario (array $usuario)
{
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])){
        //return false;
        //utilizando exceção
        throw new Exception ('Campos obrigatórios não foram preenchidos.');
    }
    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => 'Gabi',
    'idade' => 32
];

$status = false;

try {
    $status = validaUsuario($usuario);
}
catch (Exception $e) {
    echo $e->getMessage();
}
finally {
    echo '<br>Status da operação: ' . (int)$status;
    die();
}

echo '<br>... executando ...';



/*
Validação sem tratamento
$usuarioValido = validaUsuario($usuario);

if(!$usuarioValido){
    echo 'Usuário Inválido';
    return false;
}

echo '/n... executando .../n';*/