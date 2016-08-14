<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 14/8/2016
 * Time: 12:41 PM
 */
include '../php/conectar.php';
include '../php/login.php';

if (isset($_POST['user'])) {
    $user = $_POST['user'];
}

if (isset($_POST['pass'])) {
    $pass = $_POST['pass'];
}

if(!empty($user) && !empty($pass)) {
    $con = new Login();
    $con->doLogin($user, $pass);

} else {
    header("Location: login.php?error=datos-incorrectos");
}
