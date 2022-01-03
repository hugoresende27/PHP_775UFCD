
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Criptos</title>
	<style>
         ul {list-style: none;}
         input, select {padding: 5px;margin-top: 10px;margin-left: 20px;}

      </style>
      <form method="post">
      <ul>
        <li> Nome: <input type = "text" name = "nome" /></li>
         
        <li> Senha:    <input type = "password" name = "pass" /></li>
        <li>
     		 <input type="submit" class="btnSubmit" value="Entrar"></button>
     		 <a href="C:\xampp\htdocs\curso2\cripto.php">Actualizar</a>
  		</li>
      
       </ul>
   </form>
   <br/>
   <?php 

$s = sha1("Hugo");
echo $s;

echo "<br/>";

//md5

$m=md5 ("php intermediario");
echo $m;

echo "<br/>";

//Based64 code
$b= base64_encode ("criptografias");
echo $b;

echo "<br/>";

echo base64_decode($b);

echo "<br/>Utilizador::  ". filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
echo "<br/>";
echo "Senha::  ".md5 (filter_input(INPUT_POST, "pass", FILTER_SANITIZE_STRING));

?>


	
</head>
<body>
	
</body>
</html>