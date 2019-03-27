<?php 

$conexion = mysqli_connect("localhost","root","","lager_haus") or die("Problemas al conectar a la base de datos");


if(isset($_POST['usuario']) && isset($_POST['password'])) {

	$usuario = $_POST['usuario'];
    $password = md5($_POST['password']);
    $password2 = md5($_POST['password2']);

	$usuariosRegistrados = mysqli_query($conexion,"SELECT idUsuario,nombre from usuario where nombre='$usuario'") or die(mysqli_error($conexion));

	$cantidadUsuarios = mysqli_num_rows($usuariosRegistrados);
	if($cantidadUsuarios > 0) {
		// usuario existente
        //header("Location:cr.php?error=si");
        echo "Usuario Existente";
		header("Location:createUser.php?error=si");
		// Cuando el usuario existe redirigirlo a registro.php pasando como parametro en la URL algo que indique hay un error
		// registro.php leer ese parametro por URL y mostrar un mensaje en un span con color (libre) que diga : el usuario existe
		// si no hay nada en la url que no diga: undefined error bla bla 
		// isset y empty
	} else {
    if($password == $password2) {

        $registro = mysqli_query($conexion,"INSERT into usuario (nombre,password) values ('$usuario','$password') ") or die(mysqli_error($conexion));
        if($registro){ // si la consulta salio bien 
            echo "El usuario ".$usuario." se registro correctamente";
        } else {
            echo "Ocurrio un error, intente de nuevo + tarde";

        }
    } else {
        echo "Contraseñas no coinciden";
        header("Location:createUser.php?coincide=no");
    }
	
}


} else {
	echo "debes completar todos los inputs para seguir";
}
