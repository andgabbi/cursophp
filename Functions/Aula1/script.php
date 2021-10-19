<?php

    include 'services/messages_sessions.php';
    include 'services/validations.php';
    include 'services/categories.php';


    $name = $_POST['nome'];
    $age = $_POST['idade'];

    defineCategory($name, $age);
    
    header('location: index.php');
    
    
    
    
    