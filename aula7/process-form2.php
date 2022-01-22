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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <title>Form processamento</title>
</head>

<body style="background-color:rgb(128, 97, 187)">

<div class="col-md-4 offset-md-4 main">
 
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
           // if (!preg_match("/^[a-zA-Z ]*$/", $nome)){       // regex usado aqui, /^[chars]$/
            if (!preg_match("/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/", $nome)){       
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
                $erro_mail = "Email inválido...";
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
            date_default_timezone_set("Europe/Lisbon");
            $data = date("d-m-Y h:i A");

            //guardar num ficheiro
            $ficheiro = "contactos.txt";
            $fh = fopen($ficheiro, 'a') or die ("Erro não foi possível criar o ficheiro");
            fwrite ($fh,"nome :: ".$nome. PHP_EOL);
            fwrite ($fh,"email :: ".$mail. PHP_EOL);
            fwrite ($fh,"telefone :: ".$telefone. PHP_EOL);
            fwrite ($fh,"genero :: ".$genero. PHP_EOL.PHP_EOL);
            fwrite ($fh,"Mensagem :: ".$mensagem. PHP_EOL.PHP_EOL);
            fwrite ($fh,"Data Submissão :: ".$data. PHP_EOL.PHP_EOL);

            fclose($fh);
            echo "Dados submetidos e gravados em ficheiro com Sucesso!";

            //enviar por email
            //endereço para quem vai o email
            $endereco = "Hugo Resende <hugoresende27@gmail.com>";
            $assunto = "[Contacto do site] $nome";

            $headers =  "From: $nome <$mail>".PHP_EOL;
            $headers .= "Reply-To: $mail".PHP_EOL;
            $headers .= "MIME-Version: 1.0". PHP_EOL;
            $headers .= "Content-type: text/html; charset=utf-8". PHP_EOL;

            $msg = "<!DOCTYPE html><html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" /><style type=\"text/css\"> @media only screen and (max-device-width:480px){td[class=w10]{width:10px !important;}td[class=w15]{width:5px!important;}td[class=w30]{width:10px !important;}td[class=w220]{width:80px!important;}td[class=w240]{width:180px !important;}td[class=w280]{width:135px!important;}td[class=w580]{width:280px !important;}table[class=w640], td[class=w640]{width:300px!important;}p[id=footer]{text-align:center!important;}#header h1{font-size:30px !important;}#header,#footer{-webkit-text-size-adjust:80%!important;-ms-text-size-adjust:80% !important;}}#outlook a{padding:0;}body{width:100% !important;}.ReadMsgBody{width:100%;}.ExternalClass{width:100%; display:block !important; }.yshortcuts, .yshortcuts a,.yshortcuts a:link,.yshortcuts a:visited,.yshortcuts a:hover,.yshortcuts a span{color:black; text-decoration:none!important; border-bottom:none!important;background:none !important;}/* Formataçao Geral*/ body{background-color:#FFFFFF;margin:0;padding:0;font-family:'Helvetica Neue',Arial,Helvetica,Geneva,sans-serif;}br,strong br,b br,em br,i br{line-height:100%;}table td,table tr{border-collapse:collapse;}#background-table{background-color:#FFFFFF;}#top-bar{border-radius:6px 6px 0 0; -moz-border-radius:6px 6px 0 0;-webkit-border-radius:6px 6px 0 0; font-weight:bold;} #footer{border-radius:0 0 6px 6px;-moz-border-radius:0 0 6px 6px;-webkit-border-radius:0 0 6px 6px;} #top-bar, #footer{-webkit-font-smoothing:antialiased;background-color:#266297;color:#ededed; text-align:center; -webkit-text-size-adjust:none;-ms-text-size-adjust:none; font-size:12px;}#header{-webkit-text-size-adjust:none;-ms-text-size-adjust:none;}#header h1{line-height:100% !important; -webkit-font-smoothing:antialiased; font-size:36px; text-align:center; margin:15px 0 30px 0; color:#266297}#header p{text-align:left; margin:0 15px; line-height:25px; font-size:14px;}#texto{margin:0 0 15px 0}#texto p{font-weight:400; color:#266297 } #texto span{font-weight:normal; color:#333;}</style></head><body><table id='background-table' border='0' cellpadding='0' cellspacing='0' width='100%'><tbody><tr><td align='center' bgcolor='#FFFFFF'><table class='w640' border='0' cellpadding='0' cellspacing='0' width='640'><tbody><tr><td class='w640' height='20' width='640'></td></tr><tr><td id='top-bar' class='w640' width='640' align='center'><p>Email via website</p></td></tr><tr><td id='header' class='w640' align='center' bgcolor='#ededed' width='640'><h1>Contacto</h1><div id='texto'>";

            $msg .= "<p><strong>Nome: </strong>$nome</p>";
            $msg .= "<p><strong>Email: </strong>$mail</p>";
            $msg .= "<p><strong>Telefone: </strong>$telefone</p>";
            $msg .= "<p><strong>Gênero: </strong>$genero</p>";
            $msg .= "<p><strong>Msg: </strong>$mensagem</p>";

            $msg .= "Data de envio: $data". PHP_EOL;

            $msg .=  "</div></td></tr><tr><td class='w640' bgcolor='#ededed' height='15' width='640'></td></tr><tr><td id='footer' class='w640'width='640' align='center'><p>Email gerado a: $data</p></td></tr></tbody></table></td></tr><tr><td class='w640' height='20' width='640'></td></tr></tbody></table></body></html>";

          

            if (mail($endereco, $assunto, $msg, $headers)){
                echo "<h3>Formulário enviado por email com sucesso</h3>";
            } else {
                echo "<h3>Formulário <span class='vermelho'>NÃO ENVIADO</span> por email</h3>";
            }

            //guardar na base de dados
            include 'connect.php';
            $sql = "INSERT INTO contatos  (nome, email, telefone,  mensagem,  genero) 
                                 VALUES   ('$nome','$mail','$telefone','$mensagem','$genero')";
            if (mysqli_query($liga, $sql)){
                echo "<h3>Dados gravados na base de dados com sucesso!</h3>";
            } else {
                echo "<h3>Erro ao grava na base de dados: ".mysqli_error($liga)."</h3>";
            }
                
            


        } else {
            //se as vars de erro têm conteúdo temos de voltar a mostrar o form com os dados preenchidos e indicação do erro
            ?>
                <body style="background-color:rgb(128, 97, 187)">

                <div class="main" style="max-width:750px; margin-left:25%">

                <h2>Formulário de contacto</h2>
                <p>Fale connosco</p> 
                <p><span class="vermelho">Todos os campos com exepção do telefone são obrigatórios</span></p>
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
                    <button type="button" class="btn btn-warning"><a href="mostra_contatos.php" >Mostrar Dados Ficheiro</a></button>
                    <button type="button" class="btn btn-danger"><a href="mostra_contatosBD.php">Mostrar Dados DB</a></button>

                    </form>
                </div>
            <?php
        }
    } else {
        header('location:formularios2.php');
    }
       if (isset($liga)){
        mysqli_close($liga);
       } 
     ?> 
     
        <a class ="negrito" href="formularios2.php">Voltar</a>
    </div>
</body>
</html>