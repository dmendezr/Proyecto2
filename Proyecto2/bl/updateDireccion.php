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
if(isset($_POST['pais'])) {
    $pais = $_POST['pais'];
}
if(isset($_POST['provincia'])) {
    $provincia = $_POST['provincia'];
}
if(isset($_POST['canton'])) {
    $canton = $_POST['canton'];
}
if(isset($_POST['distrito'])) {
    $distrito = $_POST['distrito'];
}
if(isset($_POST['direccionExacta'])) {
    $direccionExacta = $_POST['direccionExacta'];
}

$persona = new Editar();
if($persona -> updateDireccion($id,$pais,$provincia,$canton,$distrito,$direccionExacta)){
    header("Location: ../confDireccion.php?id=".$id);
}else{
    header("Location: ../confDireccion.php?error=true");
}