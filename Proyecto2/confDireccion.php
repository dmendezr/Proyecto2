<?php
include "headerConfig.php";
if (isset($_GET['id'])){
    $id = $_GET['id'];

}
include "bl/consultaDireccion.php";
?>
   <script src="js/editarDireccion.js" type="application/javascript"></script>

    <div class="content-configuracion">
        <form action="bl/updateDireccion.php" method = "POST">
            <input type="hidden" name = 'id' value="<?php echo $id ?>">
            <div class="campos">
                <div class="campoLinea">
                    <label for="pais" class="lblPais">Pais</label>
                    <input type="text" id="pais" name="pais" value="<?php echo $datos['Pais'] ?>" class="inputPais">
                    <div class="clear"></div>
                </div>
                <div class="campoLinea">
                    <label for="provincia" class="lblProvincia"> Provincia </label>
                    <input type="text" name="provincia" value="<?php echo $datos['Provincia'] ?>" class="inputProvincia">
                    <div class="clear"></div>
                </div>
                <div class="campoLinea">
                    <label for="canton" class="lblCanton">Canton</label>
                    <input type="text" name="canton" value="<?php echo $datos['Canton'] ?>" class="inputCanton">
                    <div class="clear"></div>
                </div>
                <div class="campoLinea">
                    <label for="distrito" class="lblDistrito">Distrito</label>
                    <input type="text" name="distrito" value="<?php echo $datos['Distrito'] ?>" class="inputDistrito">
                    <div class="clear"></div>
                </div>
                <div class="campoLinea">
                    <label for="direccionExacta" class="lblDireccionExacta">Direccion Exacta</label>
                    <input type="text" name="direccionExacta" value="<?php echo $datos['DireccionExacta'] ?>" class="inputDireccionExacta">
                    <div class="clear"></div>
                </div>

            </div>

            <button>Actualizar</button>
        </form>

    </div>


<?php
include "footer.php";
?>