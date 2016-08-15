<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 14/8/2016
 * Time: 5:42 PM
 */

include '../php/conectar.php';
include '../php/obtener.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$pasatiempos = new Persona();
$datos = $pasatiempos ->getPasatiempoPorID($id);
echo json_encode($datos);