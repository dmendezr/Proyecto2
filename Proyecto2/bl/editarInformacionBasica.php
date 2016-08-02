<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 1/8/2016
 * Time: 11:17 PM
 */
include "../php/conectar.php";
include  "../php/editar.php";

if (isset($_GET['id'])){
    $id = $_GET['id'];
}

if (isset($_GET['nombre'])){
    $nombre = $_GET['nombre'];
}

if (isset($_GET['primerApellido'])){
    $primerApellido = $_GET['primerApellido'];
}

if (isset($_GET['segundoApellido'])){
    $segundoApellido = $_GET['segundoApellido'];
}
if (isset($_GET['fechaNacimiento'])){
    $fechaNacimiento = $_GET['fechaNacimiento'];
}

if (isset($_GET['codigoPostal'])){
    $codigoPostal = $_GET['codigoPostal'];
}

if (isset($_GET['sexo'])){
    $sexo = $_GET['sexo'];
}

if (isset($_GET['edad'])) {
    $edad = $_GET['edad'];
}

$persona = new Editar();
if($persona -> updatePersona($id,$nombre, $primerApellido, $segundoApellido, $fechaNacimiento, $codigoPostal, $sexo, $edad)){
    header("Location: ../confInformacionBasica.php?id=".$id);
}else{
    header("Location: ../confInformacionBasica.php?error=true");
}