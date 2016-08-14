<?php

include 'php/conectar.php';
include 'php/obtener.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$direccion = new Persona();
$datos = $direccion ->getDireccion($id);
?>