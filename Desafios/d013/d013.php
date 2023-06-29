<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <?php 
        $saque = $_GET["saque"] ?? 0;

        $cem = intdiv($saque,100);
        $restocem = $saque % 100;

        $cinquenta = intdiv($restocem,50);
        $restocinquenta = $restocem % 50;

        $dez = intdiv($restocinquenta,10);
        $restodez = $restocinquenta % 10;

        $cinco = intdiv($restodez,5);
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
        <label  for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
        <input type="number" name="saque" step="5" value="<?=$saque?>">
        <p style="font-size: 0.6em"><sup>*</sup>disponíveis: R$100 R$5O R$10 e R$5</p>
        <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php 
            $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
            echo "<h2>Saque de ".numfmt_format_currency($padrao,$saque,"BRL")." realizado</h2>";
            echo "<p>O caixa eletrônico vai te entregar as seguintes notas:</p>";
            echo "<ul>";
            echo "
                <li> <img src='imagens/100-reais.jpg' alt='nota de cem reais' class='nota'>: x$cem</li>
                <li> <img src='imagens/50-reais.jpg' alt='nota de cem reais' class='nota'>: x$cinquenta</li>
                <li> <img src='imagens/10-reais.jpg' alt='nota de cem reais' class='nota'>: x$dez</li>
                <li> <img src='imagens/5-reais.jpg' alt='nota de cem reais' class='nota'>: x$cinco</li>
            ";
            echo "</ul>";
        ?>
       
    </section>
</body>
</html>