<!DOCTYPE html>
<html>
<head>
	<title>Portafolio-Index</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>
	<script type="text/javascript" src="js/efecto2.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
	<script type="text/javascript" src="js/tituloInformacion.js"></script>
	<noscript>
			<link rel="stylesheet" type="text/css" href="css/nojs.css" />
	</noscript>
<!--	Cofiguracion de Galeria-->
	<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/grid_24.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/demo.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
	<script src="js/jquery-1.7.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/uCarousel.js"></script>
	<script src="js/tms-0.4.1.js"></script>
</head>
<body>
<?php
	if (isset($_GET['id'])){
		$id = $_GET['id'];

	}
?>
	<div class="wrapper">
		<header>
			<div class="logo">
				<a href="../index.php"><img src="images/logo.png"></a>
		<nav>
        	<ul id="menu">
          		<li><a href="index.php?id=<?php echo $id?>">Inicio</a></li>
          		<li><a href="information.php?id=<?php echo $id?>">Informacion</a>
            		<ul>
              			<li><a href="pasatiempos.php?id=<?php echo $id?>">Pasatiempos</a></li>
              			<li><a href="escolaridad.php?id=<?php echo $id?>">Escolaridad</a></li>
              			<li><a href="logros.php?id=<?php echo $id?>">Logros</a></li>
            		</ul>  
          		</li>
          		<li><a href="Galeria.php?id=<?php echo $id?>">Galeria</a></li>
        	</ul>
      </nav>
		</header>