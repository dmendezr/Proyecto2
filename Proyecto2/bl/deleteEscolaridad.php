<?php
/**
 * Created by PhpStorm.
 * User: dmendezr
 * Date: 12/08/2016
 * Time: 04:44 PM
 */


include '../php/conectar.php';
include '../php/eliminar.php';

if(isset($_POST['id'])) {
    $id= $_POST['id'];
}


if ($id != "") {
    $borrar = new Eliminar();
    if($borrar -> deleteEscolaridad($id)){
        echo true;
    } else {
        echo false;
    }
} else {
    echo false;
}