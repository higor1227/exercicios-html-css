<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taxa-de-entrega-b</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $valorProduto = floatval($_POST['valorProduto']);
 
        $taxaEntrega = 15; // 15%
        $valorDesconto = 20; // 20%
 
        if ($valorProduto > 1000) {
            $valorTotal = $valorProduto + (($valorProduto * $taxaEntrega) / 100);
            $valorFinal = $valorTotal - (($valorTotal * $valorDesconto) / 100);
        } else {
            $valorFinal = $valorProduto + (($valorProduto * $taxaEntrega) / 100);
            $valorTotal = $valorFinal; // nesse caso, não tem desconto
        }
 
        echo "<h2>Resultados</h2>";
        echo "Valor do produto: R$ " . number_format($valorProduto, 2, ',', '.') . "<br>";
        echo "Taxa de entrega: $taxaEntrega%<br>";
        echo "Valor final: R$ " . number_format($valorFinal, 2, ',', '.') . "<br>";
    } else {
        echo "Acesso inválido.";
    }
    ?>
    <br>
    <a href="Amenu.html">Voltar para o Menu</a>

</body>
</html>
 