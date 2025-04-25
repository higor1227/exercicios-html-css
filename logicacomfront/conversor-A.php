<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>

    <h2>Conversor de Moedas (Real → Dólar)</h2>

    <form action="conversor-B.php" method="post">
        <label>Valor em reais:</label><br>
        <input type="number" name="reais" step="any" required><br><br>

        <label>Cotação do dólar:</label>
        <br>
        <input type="number" name="dolar" step="any" value="5.93" required><br><br>

        <button type="submit">Converter</button>
    </form>

</body>
</html>
