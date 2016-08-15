		<?php include 'header.php';
		if (isset($_GET['id'])){
			$id = $_GET['id'];

		}
		?>
		<script>

			function enviaID() {
				return <?php echo $id ?>
			}
		</script>
		<script src="js/obtienePasatiempo.js" type="application/javascript"></script>
		<script type="text/javascript" src="js/efecto3.js"></script>
		<div class="slide">
			<img src="images/slider-pasatiempos.jpg">
			<h2> Pasatiempos</h2>

		</div>
		<div class="headerContent">
			<div class="headerContentContainer">
				<p><h1>Bienvenido</h1></p>
				<p><h3>Este sitio le proporcionara un portafolio personal en el cual podra encontrar informacion personal, pasatiempos y una galeria de imagenes. Navegar en el menu para ir a las diferentes opciones </h3></p>
			</div>		
		</div>
		<div class="pasatiempos-contenido">

		</div>
		</div>
		<div id="fade" class="overlay"></div>
 		<div id="light" class="modal">
    		 <p>Lorem ipsum dolor sit.....</p>
  		</div>
		<?php include 'footer.php'; ?>