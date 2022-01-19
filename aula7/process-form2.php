<?php
 
    require 'funcoes.php';

    //alguns servidores não têm definidos o EOL End of Line
    if (!defined("PHP_EOL")){
        define ("PHP_EOL", "\r\n");
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="css/estilos.css"/>
    <title>Form processamento</title>
</head>

<body>
    <h1 class="vermelho">A processar o seu form .... </h1>    

    <?php

    if (isset($_POST['submit']))  {   //verificar submit, boas praticas

        //limpar vars
        $nome = $mail = $telefone = $mensagem = $genero = "";
        //mensagem de erro caso vazio
        $erro_nome = $erro_mail = $erro_telefone = $erro_mensagem = $erro_genero = "";

        //verificar se nome está vazio/////////////////////////////////////////////////////////////
        if (empty($_POST['nome'])){
            $erro_nome = "O nome é obrigatório!";
            $ha_erros = true;
        } else {
            $nome = seguranca_dados($_POST['nome']);
            //verificar se nome tem caracteres não permitidos
            if (!preg_match("/^[a-zA-Z ]*$/", $nome)){       // regex usado aqui, /^[chars]$/
                $erro_nome = "Só são permitidas letras e espaços...";
                $ha_erros = true;
            }
        } 

        //verificar se email está vazio/////////////////////////////////////////////////////////////
        if (empty($_POST['email'])){
            $erro_mail = "O email é obrigatório!";
            $ha_erros = true;
        } 
        //verificar se email tem caracteres não permitidos
        elseif (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $_POST['email'])){  // regex usado aqui
                $erro_mail = "Só são permitidas letras e espaços...";
                $ha_erros = true;
            }
        else {
            $mail = seguranca_dados(($_POST['email']));
        }

        //verificar se telefone está vazio/////////////////////////////////////////////////////////////
        if (empty($_POST['tel'])){
            $telefone ="";
        }
        elseif (!preg_match("/\d/", $_POST['tel'])){       // regex usado aqui
                $erro_telefone = "Número só pode conter digitos...";
                $ha_erros = true;
            }
        else {
            $telefone = seguranca_dados(($_POST['tel']));
        }

        //verificar se mensagem está vazia/////////////////////////////////////////////////////////////
        if (empty($_POST['mensagem'])){
            $erro_mensagem = "A mensagem é obrigatório!";
            $ha_erros = true;
        }  
        else {
            $mensagem = seguranca_dados(($_POST['mensagem']));
        }

        //verificar se gênero está vazio/////////////////////////////////////////////////////////////
        if (empty($_POST['gen'])){
            $erro_genero = "Gênero obrigatório é obrigatório!";
            $ha_erros = true;
        }  
        else {
            $genero= seguranca_dados(($_POST['gen']));
        }

        // VERIFICAÇÃO FINAL SE FORM DEVIDAMENTE PREENCHIDO///////////////////////////////////////////////////////////
        if (!isset($ha_erros)){
            //processamos forms
            $ficheiro = "contactos.txt";
            $fh = fopen($ficheiro, 'a') or die ("Erro não foi possível criar o ficheiro");
            fwrite ($fh,"CONTACTO ::". PHP_EOL);
            fwrite ($fh,"nome  ".$nome. PHP_EOL);
            fwrite ($fh,"email  ".$mail. PHP_EOL);
            fwrite ($fh,"telefone  ".$telefone. PHP_EOL);
            fwrite ($fh,"genero  ".$genero. PHP_EOL.PHP_EOL);

            fclose($fh);
            echo "tudo certo !";
        } else {
            //se as vars de erro têm conteúdo temos de voltar a mostrar o form com os dados preenchidos e indicação do erro
            ?>
                <form method ="POST" action="process-form2.php">

                <p><label class="negrito" for="nome">NOME: <span class="vermelho">*</span></label>
                <input type="text" name="nome" id="nome" value="<?= $nome ?>">
                <?php if (!empty($erro_nome)) {
                    echo "<span class='vermelho'>$erro_nome</span>";
                    } ?> </p>

                <p><label class="negrito" for="email">EMAIL: <span class="vermelho">*</span></label>
                <input type="text" name="email" id="email" value="<?= $mail ?>">
                <?php if (!empty($erro_mail)) {
                    echo "<span class='vermelho'>$erro_mail</span>";
                    } ?> </p>

                <p><label class="negrito" for="tel">TELEFONE: </label>
                <input type="text" name="tel" id="tel" value="<?= $telefone ?>">
                <?php if (!empty($erro_telefone)) {
                    echo "<span class='vermelho'>$erro_telefone</span>";
                    } ?> </p>

                <p><label class="negrito" for="mensagem">Mensagem: <span class="vermelho">*</span></p>
                <p><textarea name="mensagem" id="mensagem" cols="40" rows="5"><?= $mensagem ?></textarea>
                <?php if (!empty($erro_mensagem)) {
                    echo "<span class='vermelho'>$erro_mensagem</span>";
                    } ?></p>

                <p><label class="negrito" for="gen">Gênero: <span class="vermelho">*</span></p>
                <input type="radio" name="gen" id="masc" value="M" <?php if (isset($genero) && $genero == 'M') echo "checked='checked'";?>  ><label for="masc">&nbsp;Masculino:</label>     
                <input type="radio" name="gen" id="fem" value ="F" <?php if (isset($genero) && $genero == 'F') echo "checked='checked'";?>  ><label for="fem">&nbsp;Feminino:</label> 
                <?php if (!empty($erro_genero)) {
                    echo "<span class='vermelho'>$erro_genero</span>";
                    } ?>
                <p><input type="submit" name ="submit" value="Enviar Formulário"></p>


                </form>

            <?php
        }
    } 

     ?> 
     




        <a class ="negrito" href="formularios2.php">Voltar</a>
</body>
</html>