<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
</head>
<body>
    <?php

    setlocale(LC_TIME, 'pt_BR');
    echo date('l jS');

    date_default_timezone_set("Europe/Lisbon");
    //$hoje = date("Y-F-d H:i:s");
    //$hoje = date("d/m/y");
    //$hoje = date("d-m-y");
  
    $hoje = date("Y-m-d H:i:s");//MELHOR PARA BASE DE DADOS
    echo $hoje;
    echo "<br><a href='https://www.w3schools.com/php/func_date_date_format.asp'>Link</a>";

    $proxSemana = time() + (7*24*60*60);
    $anteriorSemana = time() - (7*24*60*60);
    echo "<br>TEMPO time():: ".time();
    echo "<br><strong>Próxima semana </strong>:: ".date("Y-m-d H:i:s", $proxSemana);
    echo "<br><strong>Agora </strong>:: ".date("Y-m-d H:i:s");
    echo "<br><strong>Anterior semana</strong>:: ".date("Y-m-d H:i:s", $anteriorSemana);
    
    echo "<br>02/10/1988 foi um ". date("l", mktime(0,0,0,10,2,1988));

    echo "<br>".mktime(1,0,0,1,1,1970);

    $hoje2 = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
    $mespassado = mktime(0,0,0,date("m")-1,date("d"),date("Y"));
    $proxAno = mktime(0,0,0,date("m"),date("d"),date("Y")+1);

    echo "<br>DIA DE AMANHA:: ".date("Y-m-d H:i:s", $hoje2);
    echo "<br>MES PASSADO:: ".date("Y-m-d H:i:s", $mespassado);
    echo "<br>PROXIMO ANO:: ".date("Y-m-d H:i:s", $proxAno);

    $datadiff = time() - strtotime("1988-10-02");
    //dividir o total de segundos por segundos * minutos * dias para saber dias
    $dias = floor($datadiff / ( 60 * 60 *24));
    echo "<br>O user viveu $dias dias!";

    $finalAno = strtotime("2022-12-31") - time();
    $dias2 = floor($finalAno / (60 * 60 * 24));
    echo "<br>ate ao fim do ano $dias2 dias!";

    echo strftime('<br>%A, %d de %B de %Y', strtotime('today'));
    
    ?>
    
</body>
</html>