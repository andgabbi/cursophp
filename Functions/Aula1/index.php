<?php

include 'services/messages_sessions.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
</head>
<body>

<h1> Formulário para inscrição de Competidores</h1>

<form action="script.php" method="post">
    <?php
        $msgErro = getMessageError();
        if (!empty($msgErro)){
            echo $msgErro;
        }

        $msgSuccess = getMessageSuccess();
        if (!empty($msgSuccess)){
            echo $msgSuccess;
        }

    ?>
    <p>Nome: <input type="text" name="nome"> </p>
    <p>Idade: <input type="text" name="idade"> </p>
    <p> <input type="submit" value="Cadastrar"> </p> 
</form>
    
</body>

</html>