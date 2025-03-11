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
    if ($_POST) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $data_nasci = $_POST['data_nasci'];
        $bandeira_cartao = $_POST['bandeira_cartao'];

        echo "<h2>Seus dados:</h2>";
        echo "<h3>Nome: $nome</h3> <br>";
        echo "<h3>Email: $email</h3> <br>";
        echo "<h3>Data de Nascimento: $data_nasci</h3> <br>";
        echo "<h3>Banderira Do Cartão: $bandeira_cartao</h3> <br>";
    }
?>
</body>
</html>