<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 
    /* 
        1 min    = 60s
        1 hora   = 60(m) * 60(s) = 3_600s 
        1 dia    = 24(h) * 60(m) = 1_440(m) * 60(s) = 86.400s
        1 semana = 7(d)  * 24(h) = 168(h)   * 60(m) = 10_080(m) * 60(s) = 604_800s 

        $total = 2_000_000;
        $sobra = stotal;
        //Trocal de semanas
        $semana = (int) ($sobra / 604_800);
        $sobra = $sobra % 604_800;
        //Total de Dias
        $dia = (int) (Ssobra / 84_400);
        $sobra = $sobra % 84_400;
        //Total de Horas
        Shora = (int) ($sobra / 3_600);
        $sobra = $sobra % 3_600;
        //Total do minutos
        $minuto = (int) ($sobra / 60);
        $sobra = $sobra % 60;
        //Total de Segundos
        $segundo = $sobra;

    */
        $inputsegundos = $_GET["segundos"] ?? 0;
        if($inputsegundos == ''){
            $inputsegundos = 0;
        }
        $segundos = $inputsegundos % 60;

        $minutos = intdiv($inputsegundos,60);
        $minutos2 = $minutos % 60;

        $horas = intdiv($minutos,60);
        $horas2 = $horas % 24;

        $dias = intdiv($horas,24);
        $dias2 = $dias % 7;

        $semanas = intdiv($dias,7);
    
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" min="0" value="<?=$inputsegundos?>" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
    <h2>Totalizando Tudo</h2>
        <?php 
            echo " <p>Analisando o valor que você digitou, <strong>".number_format($inputsegundos,"0",",",".")."</strong> segundos equivalem a um total de:</p>";
            echo"   
                <ul>
                    <li>$semanas semanas</li>
                    <li>$dias2 dias</li>
                    <li>$horas2 horas</li>
                    <li>$minutos2 minutos</li>
                    <li>$segundos segundos</li>
                </ul> "
        ?>
        
       
        
    </section>
</body>
</html>