<?php
    // Verifica se a cor foi enviada e define o valor da cor de fundo
    $corFundo = isset($_POST['cor']) ? $_POST['cor'] : '#FFFFFF'; // Cor padrão branca
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cor de Fundo</title>
</head>
<body style="background-color: <?php echo htmlspecialchars($corFundo); ?>;">
    <div>
        <p>
        Crie um formulário onde o usuário seleciona uma cor em um input color e que altere a
        cor de fundo da página. <br> Utilize a escala de cores a seguir;
        <a href="http://www.w3schools.com/html/html_colors.asp" target="_blank">Escala de cores</a>
        </p>
    </div>
    <form action="" method="post">
        <label for="cor">Escolha uma cor:</label>
        <input type="color" name="cor" id="idcor" value="<?php echo htmlspecialchars($corFundo); ?>">
        <br><br>
        <button type="submit">Aplicar Cor</button>
    </form>
</body>
</html>
