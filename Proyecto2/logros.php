        <?php include 'header.php'; ?>
        <?php
            if(isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        include 'bl/ConsultaLogros.php';
        ?>

        <div class="slide">
            <img src="images/slider-logros.jpg">
            <h2> Logros </h2>

        </div>
        <div class="headerContent">
            <div class="headerContentContainer">
                <p><h1>Bienvenido</h1></p>
                <p><h3>Este sitio le proporcionara un portafolio personal en el cual podra encontrar informacion personal,
                    pasatiempos y una galeria de imagenes. Navegar en el menu para ir a las diferentes opciones </h3></p>
            </div>
        </div>
        <div class="logros">
            <div class="header-seccion">
                <img src="images/iconoInformacion.png">
                <h2> Logros Profesionales </h2>
                <div class="clear"></div>
            </div>
            <?php foreach ($datos as $linea){?>

                <div class="seccion">
                    <h2 class="encabezado-informacion" id="lblLogros"> Logro:</h2>
                    <p class="contenido-informacion" id="lblLogros"><?php echo $linea['logro']?></p>
                    <div class="clear"></div>
                </div>

                <div class="seccion">
                    <h2 class="encabezado-informacion" id="lblDescripcion"> Descripcion:</h2>
                    <p class="contenido-informacion" id="lblDescripcion"><?php echo $linea['descripcion']?> </p>
                    <div class="clear"></div>
                </div>
            <?php }?>
        </div>
        <?php include 'footer.php'; ?>