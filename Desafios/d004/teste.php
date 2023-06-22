<pre>
    <?php
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");


        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
        $dados = json_decode(file_get_contents($url),true);//true coloca os dados em um array, se não declarar nada, o valor padrão é false, que colocará os dados em um objeto.
    
        var_dump($dados);

        $cotacao = $dados["value"][0]["cotacaoCompra"];
        
        //DATA
        $datacotacao = $dados["value"][0]["dataHoraCotacao"];
        #Formatação da data
        $dataf = substr($datacotacao,0,10);
        $array = explode("-",$dataf);
        $dataformatada = "$array[2]/$array[1]/$array[0]";
        

        echo "A cotação foi $cotacao\n";
        echo "Data: $dataformatada";
    
    ?>
</pre>