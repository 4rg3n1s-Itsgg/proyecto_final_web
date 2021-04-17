<?php 
	include "conexion.php";
	session_start();
	if (!isset($_POST["username"])) {
		header("location: ../index.php");
	}
	$usuario=$_POST["username"];
	$pass=md5($_POST["password"]);
	$db="USUARIOS";
	$cn=mysqli_connect($server,$user,$contra,$db);
	$qr=mysqli_query($cn,"SELECT * FROM USUARIO WHERE NAME_USER = '$usuario' AND PASS= '$pass' ");
	
	$cr=mysqli_num_rows($qr);
	$rw=mysqli_fetch_array($qr);
	if ($cr==1){
		$_SESSION["NAME"]=$rw["TAG_NAME"];
		header("location: ../vistas/principal.php");

	}else{
		$_SESSION["error"]="ERROR USUARIO Y/O CONTRASENA INCORRECTO";
		header("location: ../index.php");
	}
?>
	