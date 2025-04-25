<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <h2>Resultado da Conversão</h2>

    <?php
    $reais = $_POST['reais'];
    $dolar = $_POST['dolar'];
    $conversao = $reais / $dolar;
    $resultado = number_format($conversao, 2, ',', '.');

    echo "R$ " . number_format($reais, 2, ',', '.') . " equivalem a US$ $resultado";
    ?>

    <br>
    <a href="Amenu.html">Voltar para o Menu</a>

</body>
</html>
