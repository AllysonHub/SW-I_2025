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
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $n3 = $_GET['n3'];

        $maior = max($n1, $n2, $n3);
        echo "<h3>o maior numero é $maior</h3>";
    ?>
    </body>
</html>