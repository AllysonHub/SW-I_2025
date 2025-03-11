<?php 
    if ($_POST) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $data_nasci = $_POST['data_nasci'];
        $bandeira_cartao = $_POST['bandeira_cartao'];

        echo "<h2>Seus dados:</h2>";
        echo "Nome: $nome <br>";
        echo "Email: $email <br>";
        echo "Data de Nascimento: $data_nasci <br>";
        echo "Banderira Do Cartão: $bandeira_cartao <br>";
    }
?>