<?php
include "headerConfig.php";
if (isset($_GET['id'])){
	$id = $_GET['id'];

}
include "bl/consultaEscolaridad.php";
?>
	<script>

		function enviaID() {
			return <?php echo $id ?>
		}
	</script>
	<script src="js/editarEscolaridad.js" type="application/javascript"></script>

	<div class="content-configuracion">
		<form action="bl/editarInformacionBasica.php" method = "get">
			<table>
		<tr>
			<td><label for="institucionEducativa">Institucion Educativa</label></td>
			<td><label for="tituloObtenido">Titulo Obtenido</label></td>
			<td><label for="AnnoInicio">Anno de Inicio</label></td>
			<td><label for="AnnoCulminacion">Anno de Culminacion</label></td>
			<td><label for="Descripcion">Descripcion</label></td>
		</tr>
				<div id="registros">
					<!--			--><?php //foreach ($datos as $linea) {?>
					<!--				<tr>-->
					<!--					<td><input type="text" name="institucionEducativa" value="--><?php //echo $linea['InstitucionEduc'] ?><!--"></td>-->
					<!--					<td><input type="text" name="tituloObtenido" value="--><?php //echo  $linea['TituloObtenido'] ?><!--"></td>-->
					<!--					<td><input type="text" name="añoInicio" value="--><?php //echo $linea['AñoInicio'] ?><!--"></td>-->
					<!--					<td><input type="text" name="añoCulminacion" value="--><?php //echo $linea['AñoCulminacion'] ?><!--"></td>-->
					<!--				</tr>-->
					<!--			--><?php //} ?>
				</div>
			</table>
		</form>
	</div>
<?php
include "footer.php";
?>