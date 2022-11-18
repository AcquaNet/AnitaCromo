<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$consulta = $_POST['consulta'];

include('conexion.php');
 
if (mysqli_connect_errno()) {
   echo "Error conectandose a MySQL: " . mysqli_connect_error();
} else
{
  mysqli_query($conexion_base, "INSERT INTO contacto VALUES (DEFAULT, '$nombre', '$correo', '$consulta')");
  header("Location: consultarealizada.html");
}
?>

