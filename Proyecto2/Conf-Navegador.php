<!DOCTYPE html>
<html>

<head>
	<title>Configuracion del Navegador</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php 
		include 'php/conectar.php';
		include 'php/obtener.php';
		$Cliente = new Cliente();
		$resultado = $Cliente->getCliente();
	?>
	<div class="wrapper">
		<div id="header">
			<div id="logo">
				<img src="images/logo.png">
			</div>
			<nav>
        		<ul id="menu">
          			<li><a href="#">Inicio</a></li>
          			<li><a href="Conf-Navegador3.html">Informacion Basica</a>
            			<ul>
              				<li><a href="Conf-Navegador.html">Direccion</a></li>
              				<li><a href="Conf-Navegador2.html">Escolaridad</a></li>
              				<li><a href="#">Logros</a></li>
            			</ul>  
          			</li>
          		<li><a href="#">Galeria</a></li>
          		<li><a href="#">Sobre Nosotros</a></li>
        	</ul>
      		</nav>
		</div>

		<div class="content-configuracion">
			
			<div class="body-text">
				<textarea>Escriba Aqui</textarea>
				
			</div>
			<div class="body-text">
				<textarea>Escriba Aqui</textarea>
				
			</div>
			<div class="body-text">
				<textarea>Escriba Aqui</textarea>
				
			</div>
			<div class="body-text">
				<textarea>Escriba Aqui</textarea>
				
			</div>
			<div class ="body-text">
				<textarea>Escriba Aqui</textarea>
			</div>
			<div class="boton">
				<button>Guardar</button>
			</div>
			<?php
	/*Incluimos el fichero de la clase*/
	<?php foreach($resultado as $linea) { ?>
                <div class="producto">
                    <h3>Nombre:</h3>
                    <p><?php echo $linea['nombre'] ?></p>

                    <h3>Descipción:</h3>
                    <p><?php echo $linea['descripcion'] ?></p>
                </div>
	 <?php } ?>
		</div>	
	</div>
	<footer>
			Universidad Internacional de la Americas
	</footer>
</body>
</html>