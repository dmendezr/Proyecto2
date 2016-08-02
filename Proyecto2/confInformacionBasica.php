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

			<div class="campoFecha">
				<label for="fechaNacimiento">Fecha de Nacimiento</label>
				<input type="date" name="fechaNacimiento" value="<?php echo $datos['FechaNacimiento'] ?>">
			</div>
			
			<div class="campos">
				<div class="campoLinea">
					<label for="codigoPostal" class ="campo" >Codigo Postal</label>
					<input type="text" name="codigoPostal"  value="<?php echo $datos['codigo_postal'] ?>" class ="campo" >
				</div>
				<div class="campoLinea">
					<label for="sexo"  class ="campo">Sexo</label>
					<input type="text" name="sexo" value="<?php echo $datos['Sexo'] ?>" class ="campo" >
					<div class="clear"></div>
				</div>
				<div class="campoLinea">
					<label for="edad" class ="campo" >Edad</label>
					<input type="text" name="edad" value="<?php echo $datos['Edad'] ?>" class ="campo" >
					<div class="clear"></div>
				</div>
			</div>
			<button>Actualizar</button>
		</form>
			
	</div>

<?php
	include "footer.php";
?>