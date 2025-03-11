<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="expost02.php" method="post">
        <div>
            <p>
                Crie um formulario onde o usuario informa seu nome, seu email, sua dara de nascimento e escolha numa lista suspensa a bandeira do seu cartao de credito. Ao clicar em um notao de submit, exiba todos os dados na tela e nao exiba o formulario apos o preenchimento. 
            </p>
        </div>
        <h2>formulario de cadastro</h2>
        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="idnome" required><br><br>
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="idemail" required><br><br>
        </div>
        <div>
            <label for="data_nasci">Data De Nascimento: </label>
            <input type="date" name="data_nasci" id="idnasci" required><br><br>
        </div>
        <div>
            <label for="bandeira_cartao">Bandeira Do Cartão: </label>
            <select name="bandeira_cartao" id="idbandcartao" required><br><br>
                <option value="Visa">Visa</option>
                <option value="MasterCard">MasterCard</option>
                <option value="Elo">Elo</option>
                <option value="American Express">American Express</option>
                <option value="HiperCard">HiperCard</option>
            </select><br><br>
            <input type="submit" value="Enviar!">
        </div>
    </form>
</body>
</html>