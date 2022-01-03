<?php
/*
 * Crie um formulário com dois campos de entrada, um para o nome e outro para o estado 
 * (utilizando um select, não precisa ser todos os estados).  Sua aplicação deverá conter as 
 * seguintes funcionalidades quando o formulário for submetido:
 * 
  - Utilize o filter_input para obter os valores dos formulários;
  - Você deverá verificar se o nome possui mais de 5 caracteres e menos que 100;
  - Crie um array associativo utilizando os mesmos valores do array como chave, e verifique se o estado selecionado está ou não no array, caso esteja, exiba o nome do estado completo na tela;
 */

$arrEstados = array(
    "ac" => "Acre",
    "df" => "Distrito Federal",
    "mt" => "Mato Grosso",
    "pr" => "Paraná",
    "rj" => "Rio de Janeiro",
    "sp" => "São Paulo"
);

$msg = "";

if (filter_input(INPUT_POST, "btnValidar", FILTER_SANITIZE_STRING)) {
    if (strlen(filter_input(INPUT_POST, "txNome", FILTER_SANITIZE_STRING)) >= 5 && strlen(filter_input(INPUT_POST, "txNome", FILTER_SANITIZE_STRING)) <= 100) {
        $msg = "<span style='color: green'>- Nome válido.</span>";
    } else {
        $msg = "<span style='color: red'>- Nome inválido, (min. 5 e max. 100 caracteres).</span>";
    }


    $valido = false;
    $estado = filter_input(INPUT_POST, "slEstados", FILTER_SANITIZE_STRING);

    foreach ($arrEstados as $key => $value) {
        if($key == $estado){
            $valido = true;
        }
    }
    
    //Para testar a sua validação, recomendo inspecionar o elemento da página e alterar o valor do campo option, para qualquer outro que não esteja no array.
    if($valido){
         $msg = $msg . "<br /><span style='color: green'>- Estado válido.</span>";
    }else{
         $msg = $msg . "<br /><span style='color: red'>- Estado inválido.</span>";
    }
}
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>POST</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <form method="post" name="frm">
            <label>Nome: <input type="text" name="txNome" /></label><br/><br/>

            <label>
                Estado:
                <select name="slEstados">
                    <?php
                    foreach ($arrEstados as $key => $value) {
                        ?>
                        <option value="<?= $key; ?>"><?= $value; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </label><br/><br/>

            <input type="submit" name="btnValidar" value="Validar" />

            <br />
            <p><?= $msg; ?></p>
        </form>
    </body>
</html>