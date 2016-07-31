<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 31/7/2016
 * Time: 1:53 PM
 */
include "../php/conectar.php";
include "../php/obtener.php";

$persona = new Persona();
$resultado = $persona -> getPersona();