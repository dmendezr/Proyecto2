<?php

include 'php/conectar.php';
include 'php/obtener.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$logros = new Persona();
$datos = $logros ->getLogro($id);
?>
