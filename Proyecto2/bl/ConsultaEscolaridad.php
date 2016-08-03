<?php

include 'php/conectar.php';
include 'php/obtener.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$escolaridad = new Persona();
$datos = $escolaridad ->getEscolaridadporID($id);
?>/