<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 14/8/2016
 * Time: 11:52 PM
 */
include '../php/conectar.php';
include '../php/editar.php';

if(isset($_POST['id'])) {
    $id = $_POST['id'];
}
if(isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
}
if(isset($_POST['descripcion'])) {
    $descripcion = $_POST['descripcion'];
}

if ($id != "") {
    $editar = new Editar();
    if($editar ->updatePasatiempos($id,$nombre,$descripcion)){
        echo true;
    } else {
        echo false;
    }
} else {
    echo false;
}