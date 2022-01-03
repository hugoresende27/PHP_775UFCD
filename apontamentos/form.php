<?php 
$arrayNome = ["Valentina", "Hugo","Lara","Celia","Afonso","Sara","Aline"];
$nome=filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
$email=filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
$funcionarioCod = filter_input(INPUT_POST, "slFuncionario", FILTER_SANITIZE_NUMBER_INT);
$funcionario="";

if($funcionarioCod)
{
   $funcionario = $arrayNome[$funcionarioCod];
}
/*
if (isset($_POST["nome"]))
{
   $nome = $_POST ["nome"];
}

if (isset($_POST["email"]))
{
  $email = $_POST ["email"];
}

if (isset($_POST["slFuncionario"]))
{
  $funcionario = $arrayNome[$_POST["slFuncionario"]];
}

*/

?>

<!DOCTYPE html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<html>

   <head>
      <title>Formulário</title>
      <meta charset="utf-8"/>
      <style>
         ul {list-style: none;}
         input, select {padding: 5px;margin-top: 10px;margin-left: 20px;}

      </style>
   </head>
	
   <body>

       <form method="post">
      <ul>
        <li> Nome: <input type = "text" name = "nome" /></li>
         
        <li> Email:    <input type = "text" name = "email" /></li>
   <li>Pessoal:::
      <select name="slFuncionario">
         <?php
            for ($i =0; $i < count ($arrayNome); $i++)
            {
               ?>
               <option value="<?= $i; ?>"><?= $arrayNome[$i]; ?></option>
               <?php
            }
         ?>
       
      </select>
   </li>
   <li>
      <input type="submit" class="btnSubmit" value="Registar"></button>
   </li>
      </ul>
       </form>
       <br/><hr/><br/>
      <p>Nome::: <?= $nome; ?></p>
      <p>E-mail::: <?= $email; ?></p>
      <p>Funcionario::: <?= $funcionario; ?></p>
   </body>
	
</html>