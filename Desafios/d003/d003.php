<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas v1.0</h1>
        <?php 
            $carteira = $_GET["dinheiro"] ?? 0;
            $dolarhoje = 5.22;
            $convertido = $carteira / $dolarhoje;

            //SEM FORMATAÇÃO
            echo "<p>Seus R\$$carteira equivalem a <strong>US\$$convertido</strong></p>";

            //FORMATAÇÃO TRADICIONAL
            echo "<p>Seus R\$".number_format($carteira,2,',','.')." equivalem a <strong>US\$".number_format($convertido,2,',','.')."</strong></p>";

            //FORMATAÇÃO COM INTERNACIONALIZAÇÃO (MOEDAS) **RECOMENDADO PARA MOEDAS**
            $padrão = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
            echo "<p>Seus ".numfmt_format_currency($padrão,$carteira,"BRL")." equivalem a <strong>".numfmt_format_currency($padrão,$convertido,"USD")."</strong></p>";


            echo "<p><strong>*Cotação fixa de $dolarhoje</strong> informada diretamente no código</p>";

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>