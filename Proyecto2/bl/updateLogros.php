<?php
/**
 * Created by PhpStorm.
 * User: dmendezr
 * Date: 10/08/2016
 * Time: 04:44 PM
 */

include '../php/conectar.php';
include '../php/editar.php';

if(isset($_POST['id_logro'])) {
    $id_logro = $_POST['id_logro'];
}
if(isset($_POST['logro'])) {
    $logro = $_POST['logro'];
}
if(isset($_POST['descripcion'])) {
    $descripcion = $_POST['descripcion'];
}

if ($id_logro != "") {
    $editar = new Editar();
    $datos = $editar ->updateLogros($id_logro,$logro,$descripcion) ;
    if($editar ->updateLogros($id_logro,$logro,$descripcion)){
        echo true;
    } else {
        echo false;
    }
} else {
    echo false;
}