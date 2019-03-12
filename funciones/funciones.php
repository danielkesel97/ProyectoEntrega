<?php
$conexion= mysqli_connect("localhost","root","","lager_haus") or die(mysqli_error($conexion));

$registro = mysqli_query($conexion, "SELECT * from carta") or die(mysqli_error($conexion));




?>