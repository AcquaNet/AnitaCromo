<?php
$nombreyapellido = $_POST['nombreyapellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$clave = $_POST['clave'];

include('conexion.php');
$consultar_mail = mysqli_query($conexion_base, "SELECT correoelectronico FROM registro WHERE correoelectronico ='$correo'");

if(mysqli_num_rows($consultar_mail)==0){
   mysqli_query($conexion_base, "INSERT INTO registro VALUES ('$nombreyapellido', '$correo', '$telefono', '$clave')");
   header("Location: mensaje.html");
  } else{
    header("location: usuario_existente.html");
  }
?>