<?php
session_start();
$correo = $_POST['correo'];
$clave = $_POST['clave'];

include('conexion.php');

$consulta = mysqli_query($conexion_base, "SELECT correoelectronico, clave FROM registro WHERE 
correoelectronico='$correo' AND clave='$clave'");

if (mysqli_num_rows($consulta)==0) {
   header("Location: error_ingreso.html");

} else {
    $_SESSION['clientes'] = $correo;
    header("Location: productos.php");
}
?>