<?php
	if(isset($_GET['cedula'])) {
    	$id = $_GET['cedula'];
    	echo "HOLAAAAAAAAA";
	}
	
	include 'php/conectar.php';
	include 'php/obtener.php';

	$persona = new Persona();
	$resultado = $persona->getPersona("1");
?>	