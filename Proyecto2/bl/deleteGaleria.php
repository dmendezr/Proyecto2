<?php
/**
 * Created by PhpStorm.
 * User: Roger
 * Date: 14/8/2016
 * Time: 4:07 PM
 */

include '../php/conectar.php';
include '../php/eliminar.php';

if(isset($_POST['id'])) {
    $id= $_POST['id'];
}


if ($id != "") {
    $borrar = new Eliminar();
    if($borrar -> deleteGaleria($id)){
        echo true;
    } else {
        echo false;
    }
} else {
    echo false;
}