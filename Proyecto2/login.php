<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 14/8/2016
 * Time: 12:24 PM
 */
session_start();
if(!empty($_SESSION['Cedula'])) {
    header("Location: indexConfig.php");
}
include "headerLogin.php";
?>
<div class="wrapper_login">
    <div class="login">
        <div class="formulario">
            <img src="images/login.png" alt="">
            <form action="bl/doLogin.php" method="post">
                <div>
                    <label>User</label>
                    <input type="text" name="user">
                </div>
                <div>
                    <label>Pass</label>
                    <input type="password" name="pass">
                </div>
                <button>Login</button>
            </form>
            <?php if (isset($_GET['error']) && $_GET['error'] == 'usuario-no-encontrado') { ?>
                <div class="datos-incorrectos">
                    <p>Datos incorrectos</p>
                </div>
            <?php } else if(isset($_GET['error']) && $_GET['error'] == 'acceso-denegado') { ?>
                <div class="datos-incorrectos">
                    <p>Accesso denegado</p>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include "footerLogin.php"; ?>