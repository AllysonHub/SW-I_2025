<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Email: " . htmlspecialchars($_POST["email"]) . "<br>";
    echo "Senha: " . htmlspecialchars($_POST["senha"]);
} else {
    echo "Erro ao processar o formulário!";
}
?>