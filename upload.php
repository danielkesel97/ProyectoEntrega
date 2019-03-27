<?php 

session_start();
if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])) {
	require_once('funciones/conexion.php');
	$imagen = $_FILES['imagen']; // imagen es el name del input
	$nombre = $_FILES['imagen']['name']; // guardamos en una variable nombre el nombre de la imagen
	$temporal = $_FILES['imagen']['tmp_name'];
	$imagenunica = "img/" .uniqid("wachi",TRUE).".jpg";
	$idUsuario = $_SESSION['idUsuario'];
	
	$resultado = move_uploaded_file($temporal, $imagenunica);
	if($resultado) { // que todo salio bien y la imagen se subio
		// vamos a actualizar la tabla usuarios ingresando en el campo foto el valor de imagenunica
		echo "Imagen subida correctamente";
		header('location: panel.php');
		$actualizarfoto = "update usuario set avatar='$imagenunica' where idUsuario ='$idUsuario'";
		mysqli_query($conexion,$actualizarfoto) or die(mysqli_error($conexion));
	}
} else {
	header("Location:login.php");
}
 echo "<br>";
if(isset($_POST['apellido']) && isset($_POST['direccion'])  &&  isset($_SESSION['idUsuario']) )  {

	require_once('funciones/conexion.php');
	$apellido = $_POST["apellido"];
	$direccion = $_POST["direccion"];
	$hola= $_SESSION["idUsuario"];

$registro = mysqli_query($conexion,"UPDATE usuario set apellido='$apellido', direccion='$direccion' where idUsuario='$hola'") or die(mysqli_error($conexion));

	if($registro){ // si la consulta salio bien 
		echo "Perfil cargado correctamente";
		header('location: panel.php');
	} else {
		echo "Ocurrio un error, intente de nuevo + tarde";

	}
} else {
	echo "error";
	
}
	

?>