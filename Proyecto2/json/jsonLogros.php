<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 4/8/2016
 * Time: 9:22 PM
 */

include '../php/conectar.php';
include '../php/obtener.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$logros = new Persona();
$datos = $logros ->getLogrosporID($id);
echo json_encode($datos);

