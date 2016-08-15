<?php


if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$direccion = new Persona();
$datos1 = $direccion ->getDireccion($id);
?>