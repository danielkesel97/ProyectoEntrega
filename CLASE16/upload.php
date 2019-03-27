<?php 
session_start();
if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])) {
	require_once('funciones/conexion.php');
	$imagen = $_FILES['imagen']; // imagen es el name del input

	$nombre = $_FILES['imagen']['name']; // guardamos en una variable nombre el nombre de la imagen
	$temporal = $_FILES['imagen']['tmp_name'];
	$imagenunica = "imagenes/" .uniqid("wachi",TRUE).".jpg";
	$idUsuario = $_SESSION['idUsuario'];
	$resultado = move_uploaded_file($temporal, $imagenunica);
	if($resultado) { // que todo salio bien y la imagen se subio
		// vamos a actualizar la tabla usuarios ingresando en el campo foto el valor de imagenunica
		echo "Imagen subida correctamente";
		$actualizarfoto = "update usuarios set foto='$imagenunica' where id ='$idUsuario'";
		mysqli_query($conexion,$actualizarfoto) or die(mysqli_error($conexion));
	}
} else {
	header("Location:login.php");
}
?>