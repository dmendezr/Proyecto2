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
			<form enctype="multipart/form-data" action="bl/ingresaImagenGaleria.php?id=<?php echo $id ?>" method="post">
				<!--            <input type="hidden" name="id" value="--><?php //echo $id ?><!--">-->
				<input name='uploadedfile' type='file'><br>
				<input type='submit' value='Subir archivo'>
			</form>
		</div>
	</div>
<?php
include "footer.php";
?>