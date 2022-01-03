<?php
    echo "Ola turma!!!";

    $nome = "Hugão!";
    $acesso = true;
    echo "<br>Meu nome é ".$nome;   

echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters","<br>";

define ("min",17);
define ("max", 45);

$idade=25;
echo "MIN".min. "<br>";
echo "MAX".max. "<br>";
if ($idade>= min && $idade <= max && $acesso = true){
    echo "<h1 style=\"color:green\">acesso aceite....</h1>";
}else{
    echo "<br>acesso negado";
}

echo "<br> versão ::::: ". PHP_VERSION;

$dia =5;
switch ($dia){
    case 1:
        echo "domingo";
        break;
        
    case 2:
        echo "segunda";
        break;
        
    case 3:
        echo "terça";
        break;
        
    case 4:
        echo "quarta";
        break;

    default:
        echo "dia não encontrado";
        break;
}

$arraynome = ["Hugo","Lara","Celia","Afonso","Sara","Aline"];
echo count($arraynome);
for ($i=0; $i < count($arraynome) ; $i++){
    echo "<br>".$arraynome[$i];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP curso 2</title>
</head>
<body>
    <p> Olá, hoje é dia <?=$dia;?></p>

    <select name="profs">
    <?php
        for ($i=0; $i < count($arraynome) ; $i++)
        {
            ?>
            <option value="<?=$i;?>"><?= $arraynome[$i];?></option>
            <?php
         } 
            ?>
    </select>
  
    <button onclick="alert(document.getElementById('slProfessores').value);"> Seleccionar</button>
    <div >
         <table border = 1 style="width: 100%">
         <tr>
             <td>
         <?php 
            $arryNotas= array (
                "aluno1"=> array(
                    "nome"=> "Hugo",
                    "nota"=> 20
                )
                );
                echo $arryNotas ["aluno1"]["nota"]."<br>";
                
                echo $arryNotas ["aluno1"]["nome"];
        ?>


      
            </td>
            <td>
                <?php
                    $arr =[];

                    for ($i=0;$i<10;$i++){
                        $arr[]=$i;
                    }
                    for ($i=0;$i<10;$i++){
                        echo "tabuada::::17 X {$i} = ".(17* $arr[$i]) ."<br/>";
                    }

                    
                ?>
            </td>
            <td>
            <?php
                $arrFrutas=["Ananas","Banana","kiwi","morango","uva"];

                foreach($arrFrutas as $v){
                    echo $v."<br>";
                }
            ?>
            </td>
            <td>
            <?php
                $arrFrutas=[
                    1=> "Ananas",
                    2=> "Banana",
                    3=>"kiwi",
                    4=>"morango",
                    5=>"uva"];

                foreach($arrFrutas as $key => $v){
                    echo "Key: {$key}=> Value: {$v}.<br>";
                }
            ?>
            </td>
            
            
            
        </tr>
        <tr>
        <td>
        <?php 
            $arrNotas =[
                "aluno1" => [
                    "nome"=>"Hugo",
                    "nota"=>7
                ],
                "aluno2" => [
                    "nome"=>"Lara",
                    "nota"=>4
                ],
                "aluno3" => [
                    "nome"=>"Celia",
                    "nota"=>1
                ],
                "aluno4" => [
                    "nome"=>"Afonso",
                    "nota"=>9
                ]
                ];
            foreach ($arrNotas as $aluno){
                foreach ($aluno as $chave => $valor){
                    echo "{$chave} = {$valor}<br>";
                }
                echo "<br>";
            }
        ?>
        
        </td>
        
        </tr>
         </table>   
    </div>
</body>
</html>
