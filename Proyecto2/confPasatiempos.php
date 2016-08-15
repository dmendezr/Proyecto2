<?php
include "headerConfig.php";
if (isset($_GET['id'])){
	$id = $_GET['id'];

}
?>
	<script>

		function enviaID() {
			return <?php echo $id ?>
		}
	</script>

	<script src="js/editarPasatiempos.js" type="application/javascript"></script>
	<div class="content-configuracion">
		<div id="pasatiempos">

		</div>
		<div id="nuevoPasatiempo">
			<form enctype="multipart/form-data" action="bl/ingresaPasatiempo.php" method="post">
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre">
				<label for="descripcion">Descripcion</label>
				<input type="text" name="descripcion">
				<input name='uploadedfile' type='file'><br>
				<input type='submit' value='Subir archivo'>
			</form>
		</div>
	</div>
<?php
include "footer.php";
?>