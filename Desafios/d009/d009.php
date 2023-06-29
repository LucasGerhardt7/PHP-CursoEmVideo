<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET["v1"] ?? '';
        $peso1 = $_GET["p1"] ?? '';
        
        $valor2 = $_GET["v2"] ?? '';
        $peso2 = $_GET["p2"] ?? '';
       
    ?> 
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1"  value="<?=$valor1?>" required>
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" min="1" value="<?=$peso1?>" required>
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" value="<?=$valor2?>" required>
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" value="<?=$peso2?>" required>
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
   
        
        <?php 
        $mediaponderada = 0;
        $mediasimples = 0;
        if($valor1 != ''){
            echo " <section>";
            echo "<h2>Cálculo das Médias</h2>";
            $mediaponderada = ($valor1 * $peso1 + $valor2 * $peso2)/($peso1 + $peso2);
            $mediasimples = ($valor1+$valor2)/2;
            echo "<p>Analisando os valores $valor1 e $valor2:</p>";
            echo
            "<ul>
                <li>A <strong>Média Aritmética Simples </strong>entre os valores é igual a ".number_format($mediasimples,2,",",".").".</li>
                <li>A <strong>Média Aritmética Ponderada </strong>com pesos $peso1 e $peso2 é igual a ".number_format($mediaponderada,2,",",".").".</li>
            </ul>
            ";
            echo'  </section>';
        }
            
        ?>
       <!--  <p>Analisando os valores <?=$valor1?> e <?=$valor2?></p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=number_format($mediasimples,2,",",".")?>,</li>
            <li>A <strong>Média Aritmética Ponderada</strong> entre os valores é igual a <?=number_format($mediaponderada,2,",",".")?>.</li>
        </ul>
 -->
  
</body>
</html>