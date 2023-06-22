<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analise do Número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
        $num = $_GET["numero"] ?? 0;
        $inteiro = intval($num);
        $flutuante = $num - $inteiro;
        echo "<p>Analisando o número <strong>$num</strong> informado pelo usuário:</p>";
        echo 
        "<ul>
            <li> A parte inteira do número é: <strong>$inteiro</strong>  </li>
            <li> A parte fracionada do número é: <strong>$flutuante</strong>  </li>
        </ul>";
        ?>
    </main>
</body>
</html>