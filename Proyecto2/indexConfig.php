<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 14/8/2016
 * Time: 12:37 PM
 */
include "headerConfig.php";
?>

    <div class="headerContent">
        <div class="headerContentContainer">
            <p><h1>Bienvenido <?php echo $_SESSION['Nombre'] ?> <?php echo $_SESSION['Apellido1'] ?></h1></p>
        </div>
    </div>
<?php include "footer.php"?>