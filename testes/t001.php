<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes Expressões Aritméticas com PHP</title>
</head>
<body>
    <?php 
        echo abs(-20);// retorna valor absoluto (sem sinal de positivo ou negativo)
        echo base_convert(7,10,2);// converteu o valor 7 da base 10 para base 2 (binario)
        echo intdiv(5,2);//divisão inteira entre 5 e 2 (restaria 1)
        echo pi();//exibe valor de pi 
        echo M_PI;//constante que também exibe valor de pi 
        echo pow(5,2);
        echo sqrt(81);//Raiz quadrada de 81

        #Minimo e Maximo
        echo min(1,5,7,84,32,87,635,5,9);//exibe o valor mínimo
        echo max(1,5,7,84,32,87,635,5,9);//exibe o valor maximo

        #ARREDONDAMENTOS (retira ponto flutuante)
        echo ceil(14.3);//arredonda pra cima
        echo floor(14.3);//arredonda pra baixo
        echo round(14.50);//arredondamento aritmético


    ?>
</body>
</html>