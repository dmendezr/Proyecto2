<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 15/8/2016
 * Time: 12:19 AM
 */
include '../php/conectar.php';
include '../php/eliminar.php';

if(isset($_POST['id'])) {
    $id= $_POST['id'];
}


if ($id != "") {
    $borrar = new Eliminar();
    if($borrar -> deletePasatiempos($id)){
        echo true;
    } else {
        echo false;
    }
} else {
    echo false;
}