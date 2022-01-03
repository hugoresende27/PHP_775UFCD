<?php

$arrCidades = array 
(
	21 => "Lisboa",
	22 => "Porto",
	233 => "Figueira da Foz",
	239 => "Coimbra",
);

$msg ="";


if (filter_input(INPUT_POST, "btnValidar", FILTER_SANITIZE_STRING))
{
  if(strlen(filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING)) >=5 && strlen(filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING)) <=100)
        {
          $msg ="<span style='color:green'> -- Nome aceite </span>";
        }
          else
          {
          $msg = "<span style: 'color:red'> -- min 5 max 100 </span>";
          }



          $valido = false;
          $cidade = filter_input(INPUT_POST,"slCidades", FILTER_SANITIZE_STRING);

          foreach ($arrCidades as $key => $valor)
          {
            if ($key == $cidade )
            {
              $valido =true;
            }
          }

          if ($valido)
          {
            $msg = $msg."<span>valeu</span>";
          }
          else
          {
             $msg = $msg."<span>Nao vale !!!</span>";
          }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<title>POST</title>
</head>
<body>
	<form method ="POST">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input name="nome" type="nome" id="form1Example1" class="form-control" />
    <label class="form-label" for="form1Example1">nome</label>
    <select name="slCidades">
      <?php
        foreach ($arrCidades as $key => $valor)
        {
          ?>
          <option value ="<?= $key; ?>" > <?= $valor; ?> </option>
          <?php
        }

        ?>

</select>
  </div>
  <input type="submit" name="btnValidar" value="Validar"/>

  <br/>

  <h1> <?= $msg ?> </h1>

  

 
</form>
	
</body>
</html>