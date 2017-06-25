<?php
//session_start();
include 'conexion.php';
//recicbir los datos
$usuario=$_POST["username"];
$password=$_POST["password"];
$tipo=$_POST["tipo_usuario"];
$cedula=$_POST["cedula"];
//validacion usuario repetido
$query="SELECT * FROM admin WHERE cedula='$cedula'";
$resultado1=$conexion->query($query);
$row=$resultado1->fetch_assoc();
if($row>0){
	echo"<script type=\"text/javascript\">alert('Ya existe este Usuario, pruebe con otra Cedula de Identidad'); window.location='insertarUsuario.php';</script>";  
}else{
	//consulta sql
	$insertar="INSERT INTO admin (usuario, password, tipo_usuario, cedula) VALUES ('$usuario', '$password', '$tipo', '$cedula')";
	//ejecutar consulta
	$resultado=mysqli_query($conexion, $insertar);
	if(!$resultado){
		echo'Error al registrarse';
		echo '<script language="javascript">alert("Error al Registrar");</script>';
	}else{
		echo '<script language="javascript">alert("Usuario registrado");</script>';
		header('location: insertarUsuario.php');
	}
	//mysqli_close($conexion);
}
mysqli_close($conexion);
?>
