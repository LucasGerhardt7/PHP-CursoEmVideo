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
        <h1>Conversor de moedas v2.0</h1>
        <?php 
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
      
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
          
            $dados = json_decode(file_get_contents($url),true);//true coloca os dados em um array, se não declarar nada, o valor padrão é false, que colocará os dados em um objeto.
          
            $dolarhoje = $dados["value"][0]["cotacaoCompra"];

            //DATA
            $datacotacao = $dados["value"][0]["dataHoraCotacao"];
            #Formatação da data
            $dataf = substr($datacotacao,0,10);
            $array = explode("-",$dataf);
            $dataformatada = "$array[2]/$array[1]/$array[0]";

            $carteira = $_GET["dinheiro"] ?? 0;
            
            $convertido = $carteira / $dolarhoje;

            //FORMATAÇÃO COM INTERNACIONALIZAÇÃO (MOEDAS) **RECOMENDADO PARA MOEDAS**
            $padrão = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
            echo "<p>Seus ".numfmt_format_currency($padrão,$carteira,"BRL")." equivalem a <strong>".numfmt_format_currency($padrão,$convertido,"USD")."</strong></p>";


            echo "<p>*Cotação do dia $dataformatada  de acordo com o <a href = 'https://www.bcb.gov.br/'> Banco Central </a> </p>";

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>