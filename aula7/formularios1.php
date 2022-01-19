<?php
    require('funcoes.php');

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8"  />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href ="css/estilos.css"/>
    <title>Formularios 1</title>
</head>
<body>

<h2>Formulário de contacto</h2>

<form method ="POST" action="#">
    <label for="nome">NOME:</label>
    <input type="text" name="nome" id="nome">

    <input type="submit" name ="submit" value="Enviar">

  
</form>

<?php
    //NÃO DEVE SER FEITO ASSIM
    //if (!empty($_POST['nome'])){  //isset a var existe sempre iria aparecer sempre
    //    echo "<p>Olá ".$_POST['nome']." bem vindo</p>";
    //}
    //print_r($_POST);

    if (isset($_POST['submit'])=='Enviar'){     //== 'Enviar' segurança extra verificar submit, boas praticas

        $nome = seguranca_dados( $_POST['nome']);

        if (!empty($_POST['nome'])){        //se o nome não estiver vazio
            echo "<p>Olá ".$nome." bem vindo</p>";
        } else {
            echo "<p class='vermelho'>O nome é obrigatório!</p>";
        }
       
    }



    

?>
    
</body>
</html>