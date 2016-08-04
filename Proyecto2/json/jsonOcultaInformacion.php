<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 2/8/2016
 * Time: 8:39 PM
 */

include "../php/conectar.php";
include "../php/obtener.php";

$persona = new Persona();
$resultado = $persona -> getPersona();

