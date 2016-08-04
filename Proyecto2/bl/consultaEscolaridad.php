<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 3/8/2016
 * Time: 9:56 PM
 */
include 'php/conectar.php';
include 'php/obtener.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$persona = new Persona();
$datos = $persona ->getEscolaridadporID();