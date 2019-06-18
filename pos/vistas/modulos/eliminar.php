<?php

include 'conexion.php';

$conexion = conectar();

$cedula = $_POST['id'];

$sqlInsertar = "DELETE FROM integrante where cedula='$cedula'";
 
echo $resultado = mysqli_query($conexion, $sqlInsertar);

?>

