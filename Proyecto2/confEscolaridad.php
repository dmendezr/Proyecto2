<?php
include "headerConfig.php";
if (isset($_GET['id'])){
	$id = $_GET['id'];

}
//include "bl/consultaEscolaridad.php";
//include "json/jsonEscolaridad.php";
?>
	<script>

		function enviaID() {
			return <?php echo $id ?>
		}
	</script>

	<script src="js/editarEscolaridad.js" type="application/javascript"></script>
	<div class="content-configuracion">
		<form  method = "get">
			<table id="registrosEscolaridad">
		<tr>
			<td><label for="institucionEducativa">Institucion Educativa</label></td>
			<td><label for="tituloObtenido">Titulo Obtenido</label></td>
			<td><label for="AnnoInicio">Anno de Inicio</label></td>
			<td><label for="AnnoCulminacion">Anno de Culminacion</label></td>
			<td><label for="Descripcion">Descripcion</label></td>
		</tr>

			</table>
		</form>
	</div>
<?php
include "footer.php";
?>