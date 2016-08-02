<?php
	include "headerConfig.php";
	if (isset($_GET['id'])){
		$id = $_GET['id'];
	}
	include "bl/ConsultaInformacion.php";
?>

	<div class="content-configuracion">
		<form action="bl/editarInformacionBasica.php" method = "get">
			<input type="hidden" name = 'id' value="<?php echo $id ?>">
				<label for="nombre" class="lblNombre">Nombre</label>
				<input type="text" name="nombre" value="<?php echo $datos['Nombre'] ?>" class="inputNombre">
				<label for="primerApellido" class="lblNombre">Primer Apellido</label>
				<input type="text" name="primerApellido" value="<?php echo $datos['Apellido1'] ?>" class="inputNombre">
				<label for="segundoApellido" class="lblNombre">Segundo Apellido</label>
				<input type="text" name="segundoApellido" value="<?php echo $datos['Apellido2'] ?>" class="inputNombre">



			<label for="codigoPostal" >Codigo Postal</label>
			<input type="text" name="codigoPostal" value="<?php echo $datos['codigo_postal'] ?>" >

<!--			AQUI VA LA FECHA DE NACIMIENTO-->

			<label for="sexo" >Sexo</label>
			<input type="text" name="sexo" value="<?php echo $datos['Sexo'] ?>" >

			<label for="edad" >Edad</label>
			<input type="text" name="edad" value="<?php echo $datos['Edad'] ?>" >
		</form>
			
	</div>

<?php
	include "footer.php";
?>