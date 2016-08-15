<!DOCTYPE html>
<html>
<head>
    <title>Configuracion 3</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>
</head>
<body>
<div class="wrapper">
    <?php include "bl/isAuth.php"?>
    <div id="header">
        <div id="logo">
            <img src="images/logo.png">
        </div>
        <nav>
            <ul id="menu">
                <li><a href="indexConfig.php">Inicio</a></li>
                <li><a href="confInformacionBasica.php?id=<?php echo $_SESSION['Cedula']?>">Informacion Basica</a>
                    <ul>
                        <li><a href="confDireccion.php?id=<?php echo $_SESSION['Cedula']?>">Direccion</a></li>
                        <li><a href="confEscolaridad.php?id=<?php echo $_SESSION['Cedula']?>">Escolaridad</a></li>
<<<<<<< HEAD
                        <li><a href="confPasatiempos.php?id=<?php echo $_SESSION['Cedula']?>">Pasatiempos</a></li>
                        <li><a href="#">Logros</a></li>
=======
                        <li><a href="confLogros.php?id=<?php echo $_SESSION['Cedula']?>">Logros</a></li>
>>>>>>> origin/master
                    </ul>
                </li>
                <li><a href="confGaleria.php?id=<?php echo $_SESSION['Cedula']?>">Galeria</a></li>
                <li><a href="bl/doLogout.php">Logout</a></li>
            </ul>
        </nav>
    </div>

