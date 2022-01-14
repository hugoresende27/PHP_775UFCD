<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch case</title>
</head>
<body>
    <?php
     $i=2;
     switch ($i){
         case 0:
            echo "$i é igual a 0";
            break;
         case 1:
            echo "$i é igual a 1";
            break;
         case 2:
            echo "$i é igual a 2";
            break;
     }

     echo "<br>";

     $pizza ="fatia1|fatia2|fatia3|fatia4|fatia5|fatia6";
     $fatias = explode("|",$pizza);
     echo $fatias[0]."<br>";
     echo $fatias[1];

     echo "<br><pre>";

     $carro ="rodas,motor,volante,pedais";
     $pecas = explode(",",$carro , 2);
     print_r($pecas);
     echo($pecas[0]);

     //echo"</pre>";

     echo "<br>";
     $clubes = "FCPORTO : SLBenfica : SportingCP";
     //atribuir a cada elemento de clubes uma var 
     list($maisoumenos, $fantastico, $assimAssim) = explode(":",$clubes);
     echo ("\nVAR FANTASTICA:::".$fantastico);
     echo ("\nVAR maisoumenos:::".$maisoumenos);
     echo ("\nVAR assimAssim:::".$assimAssim);

     echo "<br>";
     $dados = array("pnome", "unome", "email", "telemovel");
     print_r($dados);
     $tudoJunto = implode(" | ",$dados);
     echo ($tudoJunto);

     echo "<br>";
     $elementos =array("elemento1","elemento2","elemento3","elemento4");
     echo "<ul><li>" . implode("</li><li>",$elementos) . "</li></ul>";

     //EXPLODE = SEPARAR OS ELEMENTOS DE UMA STRING NUM ARRAY OU LISTA
     //IMPLODE = JUNTAR VÁRIOS VALORES NUMA SÓ STRING

     $people = array("hugo","emanuel","teixeira","resende");
     $newString = implode(':',$people);
     echo $newString;

     $string ="A Chave para ser imortal é nunca morrer";
     $explString = explode(" ",$string);
     echo "<pre>";
     print_r($explString);
     foreach($explString as $v){
        echo $v."|";
     }
?>

     <ul>
        <li>Elemento1</li>
        <li>Elemento2</li>
        <li>Elemento3</li>
     </ul>
    
</body>
</html>