<?php

include 'php/conectar.php';
include 'php/obtener.php';

function ConsultaNombre($cedula){
		if(isset($_GET['cedula'])) {
    	$id = $_GET['cedula'];
		}
		$persona = new Persona();
		$resultado = $persona->getPersona($cedula);	
}
?>
