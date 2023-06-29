<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $anoatual = date("Y");
        $anonascimento = $_GET["anonascimento"] ?? 2000;
        $anofinal = $_GET["anofinal"] ?? $anoatual;
        
        $idade = $anofinal - $anonascimento;
    
    
    ?>
    
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
        <label for="anonascimento">Em que ano você nasceu?</label>
        <input type="number" name="anonascimento" min="1900" max="<?=$anoatual?>" value="<?=$anonascimento?>">
        <label for="anofinal">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$anoatual?></strong>)</label>
        <input type="number" name="anofinal" min="1900"
            value="<?=$anofinal?>">
        <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
        
    
        <?php //Exibição do Resultado
        if(isset($_GET["anofinal"])){
            echo "<section>";
            echo "<h2>Resultado</h2>";
            echo "<p>Quem nasceu em $anonascimento vai ter <strong>$idade anos</strong> em $anofinal!</p>";
            echo "</section>";
        }
        ?>
    

    
</body>
</html>