<?php
/**
 * Created by PhpStorm.
 * User: dmendezr
 * Date: 12/08/2016
 * Time: 12:28 PM
 */


include '../php/conectar.php';
include '../php/ingresar.php';

if(isset($_POST['cedula'])) {
    $cedula = $_POST['cedula'];
}
if(isset($_POST['logro'])) {
    $logro = $_POST['logro'];
}
if(isset($_POST['descripcion'])) {
    $descripcion = $_POST['descripcion'];
}

if ($cedula != '' && $logro != '' && $descripcion != '') {
    $ingresar = new Ingresar();
    if($ingresar ->insertLogros($logro,$descripcion,$cedula )){
        echo true;
    } else {
        echo false;
    }
} else {
    echo false;
}