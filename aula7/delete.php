<?php
include_once 'connect.php';
$sql = "DELETE FROM contatos WHERE id='" . $_GET["id"] . "'";

if (mysqli_query($liga, $sql)) {
    $msg = "APAGADO!";

    header('location:mostra_contatosBD.php?Msg='.$msg);
} else {
    echo "Error deleting record: " . mysqli_error($liga);
}
mysqli_close($liga);
?>