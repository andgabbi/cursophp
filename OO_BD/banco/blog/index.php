<?php

require 'Blog.php';

$blog = new Blog();

switch ($_GET['postagem']) {
    case 'list':
        echo '<h3> Posts </h3>';

        foreach ($blog->list() as $value)
        {
            echo 'Id: ' . $value['id'] . '<br>Conteudo: ' . $value['post'] . '<hr>';
        }
        break;
        
    case 'insert':
        $status =  $blog->insert('Mais um Conteudo de apresentação do blog!');

        if(!$status){
            echo 'Não foi possível adicionar o conteudo.';
            return false;
        }
        echo 'Conteudo adicionado com sucesso.';
        break;
    
    case 'update':
        $status =  $blog->update('Conteudo alterado do seu blog', 1);

        if(!$status){
            echo 'Não foi possível alterar o conteudo.';
            return false;
        }
        echo 'Conteudo alterado com sucesso.';
        break;
    
    case 'delete':
        $status =  $blog->delete(1);

        if(!$status){
            echo 'Não foi possível deletar o blog.';
            return false;
        }
        echo 'Blog deletado com sucesso.';
        break;
}