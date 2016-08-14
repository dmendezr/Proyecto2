<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 14/8/2016
 * Time: 12:42 PM
 */
session_start();
if(empty($_SESSION['Cedula'])) {
    header("Location: login.php?error=acceso-denegado");
}