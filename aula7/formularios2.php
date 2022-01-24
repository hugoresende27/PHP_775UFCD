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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <title>Formularios 2</title>
</head>
<body style="background-color: black;">

<div class="col-md-6 offset-md-3 main">

<h2>Formulário de contacto</h2>
<p>Fale connosco</p> 
<p><span class="vermelho">Todos os campos com exepção do telefone são obrigatórios</span></p>


    <form method ="POST" action="process-form2.php" class="form">

        <p><label class="negrito" for="nome">NOME: <span class="vermelho">*</span></label>
        <input type="text" name="nome" id="nome"></p>

        <p><label class="negrito" for="email">EMAIL: <span class="vermelho">*</span></label>
        <input type="text" name="email" id="email"></p>

        <p><label class="negrito" for="tel">TELEFONE: </label>
        <input type="text" name="tel" id="tel"></p>

        <p><label class="negrito" for="mensagem">Mensagem: <span class="vermelho">*</span></p>
        <p><textarea name="mensagem" id="mensagem" onkeyup="resizeTextarea('InputTextArea')"></textarea></p>

        <p><label class="negrito" for="gen">Gênero: <span class="vermelho">*</span></p>
        <input type="radio" name="gen" id="masc" value="M"><label for="masc">&nbsp;Masculino:</label>     
        <input type="radio" name="gen" id="fem" value="F"><label for="fem">&nbsp;Feminino:</label> 
        <p><input type="submit" name ="submit" value="Enviar Formulário"></p>

    
    </form>

    
    <a href="mostra_contatos.php" ><button type="button" class="btn btn-warning">Mostrar Dados Ficheiro</button></a>
    <a href="mostra_contatosBD.php"><button type="button" class="btn btn-danger">Mostrar Dados DB</button></a>
    <a href="mostraAula.php"><button type="button" class="btn btn-primary">Mostrar Dados DB em Aula</button></a>



</div>

   
</body>
</html>