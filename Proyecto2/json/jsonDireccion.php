<?php
/**
 * Created by PhpStorm.
 * User: dmendezr
 * Date: 12/08/2016
 * Time: 05:47 PM
 */
include '../php/conectar.php';
include '../php/obtener.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$escolaridad = new Persona();
$datos = $direccion ->getDireccion($id);
echo json_encode($datos);
