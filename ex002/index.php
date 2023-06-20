<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>

    <?php 
        //Timezone usando CET
        echo "Hoje é dia ".date("d/m/y");
        echo " e a hora atual é ". date("H:i:s");
        echo "<br>"
    ?>

    <?php 
        //Timezone usando UTC GMT-03
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia ".date("d/m/y");
        echo " e a hora atual é ". date("H:i:s");    
    ?>


</body>
</html>