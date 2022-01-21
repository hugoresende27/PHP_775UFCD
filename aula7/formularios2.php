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
    
    <title>Formularios 2</title>
</head>
<body>

<h2>Formulário de contacto</h2>
<p>Fale connosco <span class="vermelho">Todos os campos com exepção do telefone são obrigatórios</span></p>

<form method ="POST" action="process-form2.php">

    <p><label class="negrito" for="nome">NOME: <span class="vermelho">*</span></label>
    <input type="text" name="nome" id="nome"></p>

    <p><label class="negrito" for="email">EMAIL: <span class="vermelho">*</span></label>
    <input type="text" name="email" id="email"></p>

    <p><label class="negrito" for="tel">TELEFONE: </label>
    <input type="text" name="tel" id="tel"></p>

    <p><label class="negrito" for="mensagem">Mensagem: <span class="vermelho">*</span></p>
    <p><textarea name="mensagem" id="mensagem" cols="40" rows="5"></textarea></p>

    <p><label class="negrito" for="gen">Gênero: <span class="vermelho">*</span></p>
    <input type="radio" name="gen" id="masc" value="M"><label for="masc">&nbsp;Masculino:</label>     
    <input type="radio" name="gen" id="fem" value="F"><label for="fem">&nbsp;Feminino:</label> 
    <p><input type="submit" name ="submit" value="Enviar Formulário"></p>

  
</form>

<a href="mostra_contatos.php" class="botao">Mostrar Dados</a>
<a href="mostra_contatosBD.php" class="botao">Mostrar Dados DB</a>


    
</body>
</html>