<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_GET["numero"] ?? 0;
        $raizquadrada = sqrt($num);
        $raizcubica = pow($num,1/3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="" method="get"> 
            <label for="numero">Número</label>
            <input type="number" name="numero" value="<?=$num?>"> 
            <input type="submit" value="Calcular Raízes"> 
        </form>
    </main>
   

    <section>
    <h2>Resultado Final</h2>
        <?php
            echo "Analisando o <strong>número $num</strong>, temos:";
            echo
                "<ul>
                    <li> A sua raiz quadrada é <strong>".number_format($raizquadrada,3,",",".")."</strong></li>
                    <li> A sua raiz cubica é <strong>".number_format($raizcubica,3,",",".")."</strong></li>
                </ul>
            ";
        ?>
    </section>
    
</body>
</html>