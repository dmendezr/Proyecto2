<?php

include 'php/conectar.php';
include 'php/obtener.php';

function ConsultaNombre($cedula){
		$persona = new Persona();
		$resultado = $persona->getPersona($cedula);
		$nombre_completo = $resultado['Nombre'] ." ".$resultado['Apellido1']." ".$resultado['Apellido2'];
		return $nombre_completo;
}
?>
	