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


			</table>
		</form>
	</div>
<?php
include "footer.php";
?>