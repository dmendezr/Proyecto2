<?php
include "headerConfig.php";
if (isset($_GET['id'])){
	$id = $_GET['id'];

}
include "bl/consultaEscolaridad.php";
?>
	<script src="js/editarInformacion.js" type="application/javascript"></script>

	<div class="content-configuracion">
		<form action="bl/editarInformacionBasica.php" method = "get">
		<tr>
			<td><label for="institucionEducativa">Institucion Educativa</label></td>
			<td><label for="tituloObtenido">Titulo Obtenido</label></td>
			<td><label for="AnnoInicio">Anno de Inicio</label></td>
			<td><label for="AnnoCulminacion">Anno de Culminacion</label></td>
			<td><label for="Descripcion">Descripcion</label></td>
		</tr>
			<?php foreach ($datos as $linea) {?>
				<tr>
					<td><input type="text"></td>

				</tr>
			<?php } ?>
		</form>
	</div>
<?php
include "footer.php";
?>