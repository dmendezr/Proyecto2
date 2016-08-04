<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 3/8/2016
 * Time: 8:30 PM
 */
include '../php/conectar.php';
include '../php/editar.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
}

if(isset($_POST['estadoColumna'])){
    $estadoColumna = $_POST['estadoColumna'];
}

if ($id != "") {
    $con = new Editar();
    echo $con->updateEstadoColumnaPersona($id,$estadoColumna);
    if($con->updateEstadoColumnaPersona($id,$estadoColumna)){
        echo "hola";
    } else {
        echo "segundo else";
    }
} else {
    echo "primer else";
}