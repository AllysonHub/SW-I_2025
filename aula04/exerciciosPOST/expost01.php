<?php
    $login = $_POST['login'];
    $pw = $_POST['pw'];

    if ($login == 'etec' && $pw == 'informatica') {
        echo 'Logado com Sucesso';
    } else {
        echo 'Login ou senha incorretos';
    }

    
?>