<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Desconto</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<h2>Resultado do Cálculo de Desconto</h2>



<?php 
    $valorCompra = $_POST["valorCompra"];
    $valorFinal = 0;
    
    const DESCONTO = 10;
    const IMPOSTO = 8;

    if($valorCompra > 500) {
        $valorFinal = ($valorCompra + (($valorCompra * IMPOSTO) / 100)) - (($valorCompra * DESCONTO) / 100);
    } else {
        $valorFinal = $valorCompra + (($valorCompra * IMPOSTO) / 100);
    }

    echo "Valor da Compra: R$ " . number_format($valorCompra, 2, ",", ".") . "<br>";


    echo "Desconto: " . DESCONTO . "%" . "<br>";

    echo "Imposto: " . IMPOSTO . "%" . "<br>";

    echo "<strong>Valor Final: R$ " . number_format($valorFinal, 2, ",", ".") . "</strong><br>";
?>





<br>
<a href="Amenu.html">Voltar para o Menu</a>

</body>
</html>
