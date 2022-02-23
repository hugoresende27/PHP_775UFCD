<?php
include_once 'connect.php';
// $sql = "UPDATE FROM contatos WHERE id='" . $_POST["id"] . "'";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
$genero = $_POST['genero'];

$sql = "INSERT INTO contatos (nome, email, telefone,mensagem,genero) VALUES ('$nome', '$email','$telefone','$mensagem','$genero')";

if (mysqli_query($liga, $sql)) {
    $msg = "ADICIONADO!";

    header('location:mostra_contatosBD.php?Msg='.$msg);

} else {
    echo "Error deleting record: " . mysqli_error($liga);
}
mysqli_close($liga);
?>