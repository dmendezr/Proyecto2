<?php
/**
 * Created by PhpStorm.
 * User: Roger
 * Date: 13/8/2016
 * Time: 11:40 PM
 */
include '../php/conectar.php';
include '../php/obtener.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$escolaridad = new Persona();
$datos = $escolaridad ->getGaleriaPorID($id);
echo json_encode($datos);