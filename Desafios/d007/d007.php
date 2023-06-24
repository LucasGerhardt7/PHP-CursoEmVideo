<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body> 
    <?php 
        $padrão = numfmt_create("pt_BR",NumberFormatter::CURRENCY);

        $salario = $_GET["salario"] ?? 0;
        $salariominimo = 1380;
        $qntsalariominimo = intdiv($salario,$salariominimo);
        $diferenca = $salario - $qntsalariominimo * $salariominimo;

    
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" step="0.01" value="<?=$salario?>">
            <?="<p>Considerando o salário mínimo de <strong>".numfmt_format_currency($padrão,$salariominimo,"BRL")."</strong></p>"?>
            <input type="submit" value="Calcular">
        </form>

    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        echo "Quem recebe um salário de ".numfmt_format_currency($padrão,$salario,"BRL")." ganha <strong>$qntsalariominimo salários mínimos</strong> + ".numfmt_format_currency($padrão,$diferenca,'BRL');
        ?>
    </section>
</body>
</html>