<?php
	if(isset($_GET['cedula'])) {
    	$id = $_GET['cedula'];
	}
	
	include 'php/conectar.php';
	include 'php/obtener.php';

	$persona = new Persona();
	$resultado = $persona->getPersona("1");
?>	