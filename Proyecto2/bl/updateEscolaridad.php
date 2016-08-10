<?php
/**
 * Created by PhpStorm.
 * User: dmendezr
 * Date: 10/08/2016
 * Time: 04:44 PM
 */

include 'php/conectar.php';
include 'php/editar.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}
if(isset($_GET['inst'])) {
    $inst = $_GET['inst'];
}
if(isset($_GET['titulo'])) {
    $titulo = $_GET['titulo'];
}
if(isset($_GET['annoIni'])) {
    $annoIni = $_GET['annoIni'];
}
if(isset($_GET['annoFin'])) {
    $annoFin = $_GET['annoFin'];
}
if(isset($_GET['observaciones'])) {
    $observaciones = $_GET['observaciones'];
}

$editar = new Editar();
$datos = $editar ->updateEscolaridad($id,$inst,$titulo,$annoIni,$annoFin,$observaciones) ;

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