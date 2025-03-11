<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $login = $_POST['login'];
        $pw = $_POST['pw'];

        if ($login == 'etec' && $pw == 'informatica') {
            echo '<h3>Logado com Sucesso</h3>';
        } else {
            echo '<h3>Login ou senha incorretos</h3>';
        }

    ?>
</body>
</html>