<!DOCTYPE html>
<html>

<head>
	<title>Configuracion del Navegador</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
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
	require 'php/conexico.php';

		$bd=Db::getInstance();

		/*Creamos una query sencilla*/
		$sql='SELECT Nombre FROM proyectopr3.persona';

		/*Ejecutamos la query*/
		$stmt=$bd->ejecutar($sql);

	/*Realizamos un bucle para ir obteniendo los resultados*/
	while ($x=$bd->obtener_fila($stmt,0)){
   echo $x['Nombre'].'<br />';
}

?>
		</div>	
	</div>
	<footer>
			Universidad Internacional de la Americas
	</footer>
</body>
</html>