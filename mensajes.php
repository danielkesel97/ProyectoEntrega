<?php
$conexion= mysqli_connect("localhost","root","","lager_haus") or die(mysqli_error($conexion));


if(isset($_POST['name']) && isset($POST['email']) && isset($POST['message'])) {
    $nombre = $_POST['name'];
    $email = $_POST['email'] ;
    $mensaje = $_POST ['message'];

$escrituraMensaje = mysqli_query($conexion,"SELECT id,nombre from reservas where nombre = '$nombre'") or die(mysqli_error($conexion));

$mensajeEnviado = mysqli_query($conexion,"INSERT into reservas (nombre,email,mmensaje) values ('$nombre','$email','$mensaje')") or die(mysqli_error($conexion));
if($mensajeEnviado) = {
    echo 'Mensaje enviado correctamente';
}

else{
    echo 'Ha ocurrido un error';
}

} else {
    echo 'Debe completar los datos'
}








?>