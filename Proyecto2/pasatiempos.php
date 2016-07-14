<?php include 'header.php'; ?>
<body>

	<div class="wrapper">
		<header>
			<div class="logo">
				<a href="#"><img src="images/logo.png"></a>
		<nav>
        	<ul id="menu">
          		<li><a href="index.php">Inicio</a></li>
          		<li><a href="information.php">Informacion</a>
            		<ul>
              			<li><a href="#">Pasatiempos</a></li>
              			<li><a href="escolaridad.html">Escolaridad</a></li>
              			<li><a href="">Logros</a></li>
            		</ul>  
          		</li>
          		<li><a href="">Galeria</a></li>
          		<li><a href="">Sobre Nosotros</a></li>
        	</ul>
      </nav>
		</header>
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
			<img src="images/pasatiempo1.jpg" class="rotate3D">
			<img src="images/pasatiempo3.jpg" class="rotate3D">
			<img src="images/pasatiempo4.jpg" class="rotate3D">
			<img src="images/pasatiempo1.jpg" class="rotate3D">
			<img src="images/pasatiempo3.jpg" class="rotate3D">
			<img src="images/pasatiempo4.jpg" class="rotate3D">
		</div>
		</div>
		<div id="fade" class="overlay"></div>
 		<div id="light" class="modal">
    		 <p>Lorem ipsum dolor sit.....</p>
  		</div>
		<p>Texto del sitio web. Con un <a href="">link</a> abriremos la ventana.</p>
		<?php include 'footer.php'; ?>