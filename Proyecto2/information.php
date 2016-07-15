		<?php include 'header.php'; ?>
		<?php include 'bl/ConsultaInformacion.php'; ?>
		<?php 						
			if(isset($_GET['id'])) {
   				$id = $_GET['id'];
			}
		?>
		<div class="slide">
			<img src="images/slider-informacion.jpg">
			<h2> Información Básica </h2>

		</div>
		<div class="headerContent">
			<div class="headerContentContainer">
				<p><h1>Bienvenido</h1></p>
				<p><h3>Este sitio le proporcionara un portafolio personal en el cual podra encontrar informacion personal, pasatiempos y una galeria de imagenes. Navegar en el menu para ir a las diferentes opciones </h3></p>
			</div>		
		</div>
		<div class="informacion">
			<div class="header-seccion">
				<img src="images/iconoInformacion.png">
				<h2> Informacion básica </h2>
				<div class="clear"></div>	
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblNombre"> Nombre:</h2>	
					<p class="contenido-informacion" id="txtNombre">
					<?php
						$nombre = ConsultaNombre($id);
						echo $nombre; 
					?>
					</p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblCedula"> Cedula: </h2>
					<p class="contenido-informacion" id="txtCedula">
					<?php 
						$cedula = ConsultaCedula($id);
						echo $cedula;
					?>
					</p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblCP"> Codigo Postal: </h2>
					<p class="contenido-informacion" id="txtCP">1234123412</p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblFN"> Fecha de Nacimiento: </h2>
					<p class="contenido-informacion" id="txtFN">12/10/1995</p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblSexo"> Sexo: </h2>
					<p class="contenido-informacion" id="txtSexo">Masculino</p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblEdad">Edad: </h2>
					<p class="contenido-informacion" id="txtEdad">20</p>
					<div class="clear"></div>
			</div>
			<div class="header-seccion">
				<img src="images/iconoInformacion2.png">
				<h2> Dirección </h2>
				<div class="clear"></div>	
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblPais"> Pais</h2>	
					<p class="contenido-informacion" id="txtPais">Costa Rica</p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblProvincia"> Provincia: </h2>	
					<p class="contenido-informacion" id="txtProvincia">San Jose</p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblCanton"> Canton:</h2>	
					<p class="contenido-informacion" id="txtCanton">Vazquez de Coronado</p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblDistrito"> Distrito</h2>	
					<p class="contenido-informacion" id="txtDistrito">Jesus</p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblDE"> Direccion Exacta: </h2>	
					<p class="contenido-informacion" id="txtDE">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<div class="clear"></div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>