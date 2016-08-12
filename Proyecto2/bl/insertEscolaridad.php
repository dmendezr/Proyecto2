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
if(isset($_POST['inst'])) {
    $inst = $_POST['inst'];
}
if(isset($_POST['titulo'])) {
    $titulo = $_POST['titulo'];
}
if(isset($_POST['annoIni'])) {
    $annoIni = $_POST['annoIni'];
}
if(isset($_POST['annoFin'])) {
    $annoFin = $_POST['annoFin'];
}
if(isset($_POST['observaciones'])) {
    $observaciones = $_POST['observaciones'];
}

if ($cedula != "" && $inst != '' && $titulo != '' && $annoIni != '' && $annoFin != '' && $observaciones != '') {
    $ingresar = new Ingresar();
    if($ingresar ->insertEscolaridad($cedula,$inst,$titulo,$annoIni,$annoFin,$observaciones)){
        echo true;
    } else {
        echo false;
    }
} else {
    echo false;
}