<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 14/8/2016
 * Time: 12:41 PM
 */

include '../php/conectar.php';
include '../php/login.php';

$con = new Login();
$con->doLogout();