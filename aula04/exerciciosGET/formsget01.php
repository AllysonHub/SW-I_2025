<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exget01.php" method="GET">
    <div>
        <p>Usando o método GET, crie um formulário que receba o nome do estudante, 3 notas de
        Zero à Dez e calcule a média quando um botão de submit for pressionado! Faça a
        validação dos campos de modo que usuário tenha que preencher todos os campos e
        todos numéricos</p>
        <label for="nome-do-aluno"><strong>Nome do aluno</strong></label>
        <input type="text" name="nome-do-aluno" id="nome-do-aluno" required>
    </div>
    <div>
        <label for="quantity">Nota 1:</label>
        <input type="number" id="quantity" name="n1" min="0" max="10" required>
    </div>
    <div>
        <label for="quantity">Nota 2:</label>
        <input type="number" id="quantity" name="n2" min="0" max="10" required>
    </div>
    <div>
        <label for="quantity">Nota 3:</label>
        <input type="number" id="quantity" name="n3" min="0" max="10" required>
    </div>
    <input type="submit" value="Enviar!">
    </form>
</body>
</html>