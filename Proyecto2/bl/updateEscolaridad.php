<?php
/**
 * Created by PhpStorm.
 * User: dmendezr
 * Date: 10/08/2016
 * Time: 04:44 PM
 */

include '../php/conectar.php';
include '../php/editar.php';

if(isset($_POST['id'])) {
    $id = $_POST['id'];
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

if ($id != "") {
    $editar = new Editar();
    $datos = $editar ->updateEscolaridad($id,$inst,$titulo,$annoIni,$annoFin,$observaciones) ;
    if($editar ->updateEscolaridad($id,$inst,$titulo,$annoIni,$annoFin,$observaciones)){
        echo true;
    } else {
        echo false;
    }
} else {
    echo false;
}