		<?php include 'header.php'; ?>
		<?php include 'bl/ConsultaInformacion.php'; ?>
		<?php include 'bl/consultaDireccion.php'; ?>
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
						echo $datos['Nombre'] ." ". $datos ['Apellido1'] ." ". $datos['Apellido2'];
					?>
					</p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblCedula"> Cedula: </h2>
					<p class="contenido-informacion" id="txtCedula">
					<?php 
						echo $datos ['Cedula'];
					?>
					</p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblCP"> Codigo Postal: </h2>
					<p class="contenido-informacion" id="txtCP">
						<?php echo $datos['codigo_postal'] ?>
					</p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblFN"> Fecha de Nacimiento: </h2>
					<p class="contenido-informacion" id="txtFN">
						<?php
							echo $datos['FechaNacimiento'];
						?>
					</p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblSexo"> Sexo: </h2>
					<p class="contenido-informacion" id="txtSexo">
						<?php
							echo $datos ['Sexo'];
						?>
					</p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblEdad">Edad: </h2>
					<p class="contenido-informacion" id="txtEdad">
						<?php
							echo $datos ['Edad'];
						?>
					</p>
					<div class="clear"></div>
			</div>
			<div class="header-seccion">
				<img src="images/iconoInformacion2.png">
				<h2> Dirección </h2>
				<div class="clear"></div>	
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblPais"> Pais: </h2>
					<p class="contenido-informacion" id="txtPais">
						<?php
							echo $datos1['Pais'];
						?>
					</p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblProvincia"> Provincia: </h2>	
					<p class="contenido-informacion" id="txtProvincia">
						<?php
						echo $datos1['Provincia'];
						?>
					</p>

					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblCanton"> Canton: </h2>
					<p class="contenido-informacion" id="txtCanton">
						<?php
						echo $datos1['Canton'];
						?>
					</p>


					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblDistrito"> Distrito: </h2>
					<p class="contenido-informacion" id="txtDistrito">
						<?php
						echo $datos1['Distrito'];
						?>
					</p>

					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblDE"> Direccion Exacta: </h2>	
					<p class="contenido-informacion" id="txtDE">
						<?php
						echo $datos1['DireccionExacta'];
						?>
					</p>
					<div class="clear"></div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>