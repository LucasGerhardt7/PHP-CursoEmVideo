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
        <h1>Resultado final</h1>
        <?php 

            $num = $_GET["numero"] ?? 0;
            $ant = $num - 1;
            $suc = $num + 1;

            echo "O número escolhido foi <em>$num</em>"."<br>";
            echo "O seu antecessor é <em>$ant</em>"."<br>";
            echo "O seu Sucessor é <em>$suc</em>"."<br>";
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
        <button onclick="javascript:window.location.href='d001.html'">Voltar 2</button>
    </main>
</body>
</html>