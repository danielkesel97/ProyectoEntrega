<?php
require_once('funciones/funciones.php');


if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $nombre = $_POST['name'];
    $email = $_POST['email'] ;
    $mensaje = $_POST ['message'];

$mensajeEnviado = mysqli_query($conexion,"INSERT into reservas (nombre,email,mensaje) values ('$nombre','$email','$mensaje')") or die(mysqli_error($conexion));
if($mensajeEnviado)  {
    header("location:contact-us.php");
}

else{
    echo 'Ha ocurrido un error';
}
} else{
    echo "Debes completar tus datos";
}

?>