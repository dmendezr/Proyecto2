<?php

include 'php/conectar.php';
include 'php/obtener.php';

if(isset($_GET['id'])) {
				$id = $_GET['id'];
}

$persona = new Persona();
$datos = $persona ->getPersona($id);
?>
	