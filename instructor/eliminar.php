<?php 

if ($_GET) 
{
	include '../bd/bd.php';
	include '../bd/usuarios.php';

	$id = $_GET['id'];

	$eu = new Usuarios();
	$eu->eliminarUsuario($id);

	echo "<script>";
	echo "window.location.replace('listar.php');";
	echo "</script>";
}

?>