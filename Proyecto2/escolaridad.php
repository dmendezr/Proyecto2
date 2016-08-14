	<?php
		if(isset($_GET['id'])) {
			$id = $_GET['id'];
		}
		include 'bl/ConsultaEscolaridad.php';
		?>

		<?php include 'header.php'; ?>
		<div class="slide">
			<img src="images/slider-escolaridad.jpg">
			<h2> Escolaridad </h2>

		</div>
		<div class="headerContent">
			<div class="headerContentContainer">
				<p><h1>Bienvenido</h1></p>
				<p><h3>Este sitio le proporcionara un portafolio personal en el cual podra encontrar informacion personal, pasatiempos y una galeria de imagenes. Navegar en el menu para ir a las diferentes opciones </h3></p>
			</div>		
		</div>
		<div class="informacion">
			<div class="header-seccion">d
				<img src="images/iconoEscolaridad.png">
				<h2> Escolaridad </h2>
				<div class="clear"></div>	
			</div>
			<?php foreach ($datos as $linea){?>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblIE"> Institucion Educativa </h2>	
					<p class="contenido-informacion" id="txtIE"><?php echo $linea['InstitucionEduc']?></p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblTO"> Titulo Obtenido </h2>	
					<p class="contenido-informacion" id="txtTO"><?php echo $linea['TituloObtenido']?></p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblAI"> Año de Inicio </h2>	
					<p class="contenido-informacion" id="txtAI"><?php echo $linea['AñoInicio']?></p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblAC"> Año de Culminacion</h2>	
					<p class="contenido-informacion" id="txtAC"><?php echo $linea['AñoCulminacion']?></p>
					<div class="clear"></div>
			</div>
			<div class="seccion">
					<h2 class="encabezado-informacion" id="lblObs">Otras Observaciones</h2>	
					<p class="contenido-informacion" id="txtObs"><?php echo $linea['Observaciones']?>.</p>
					<div class="clear"></div>
			</div>
			<?php }?>
			<hr>
		</div>
	</div>
	<?php include 'footer.php'; ?>