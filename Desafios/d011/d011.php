<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
       $preco = $_GET["preco"] ?? 0;
       $percentual = $_GET["percentual"] ?? 0;
       $reajuste = $preco * ($percentual / 100);
       $valorfinal =$preco + $reajuste;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" step="0.01" value="<?=$preco?>">

            <label for="">Qual será o percentual de reajuste? <strong><span id="p">?</span>%</strong></label>

            <input type="range" name="percentual" id="percentual" max="100" step="1" value="<?=$percentual?>" list="markers" oninput="mudaValor()">

            <datalist id="markers" name="markers">
                <option value="0" label="0%"></option>
                <option value="10"></option>
                <option value="20"></option>
                <option value="30"></option>
                <option value="40"></option>
                <option value="50"></option>
                <option value="60"></option>
                <option value="70"></option>
                <option value="80"></option>
                <option value="90"></option>
                <option value="100"></option>
            </datalist>

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
    <h2>Resultado do Reajuste</h2>
        <?php 
        $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);

        echo "<p>O produto que custava ".numfmt_format_currency($padrao,$preco,"BRL").", com <strong>$percentual% de aumento</strong> vai passar a
        custar <strong>".numfmt_format_currency($padrao,$valorfinal,"BRL")."</strong> a partir de agora.</p>";
        ?>
       
        
    </section>
    <script>
        mudaValor()
        function mudaValor(){
            p.innerText = percentual.value;
        }
    </script>
</body>
</html>