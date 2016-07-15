<?php

include 'php/conectar.php';
include 'php/obtener.php';

function ConsultaNombre($cedula){
		$persona = new Persona();
		$resultado = $persona->getPersona($cedula);
		return $resultado['Nombre'];
}
?>
	