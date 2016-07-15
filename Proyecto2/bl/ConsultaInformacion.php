<?php

include 'php/conectar.php';
include 'php/obtener.php';

function consultaPersona($cedula){
	$persona = new Persona();
	$resultado = $persona->getPersona($cedula);
	return $resultado;
}


function ConsultaNombre($cedula){
		$resultado=consultaPersona($cedula);
		$nombre_completo = $resultado['Nombre'] ." ".$resultado['Apellido1']." ".$resultado['Apellido2'];
		return $nombre_completo;
}

function ConsultaCedula($cedula){
	$resultado=consultaPersona($cedula);
	return $resultado['Cedula'];
}
?>
	