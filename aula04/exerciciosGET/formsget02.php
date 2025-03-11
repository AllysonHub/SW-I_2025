<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 02 com GET</title>
</head>
<body>
    <form action="exget02.php" method="GET">
        <div>
            <p>
               usando o metodo GET, crie um formulario que receba tres numeros e verifique qual deles é o maior. <br> Faça a validaçao dos campos de modo que o usuario tenha que preencher todos os campos
            </p>
            <label for="n1">Numero 1: </label>
            <input type="number" name="n1" id="idn1" required>
        </div>
        <div>
            <label for="n2">Numero 2: </label>
            <input type="number" name="n2" id="idn2" required>'
        </div>
        <div>
            <label for="n3">Numero 3: </label>
            <input type="number" name="n3" id="idn3" required>
        </div>
        <input type="submit" value="Enviar!">
    </form>

</body>
</html>