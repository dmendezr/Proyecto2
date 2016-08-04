<!DOCTYPE html>
<html>
<head>
	<title>Galeria-Index</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>
	<script type="text/javascript" src="js/efecto2.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
	<script type="text/javascript" src="js/tituloInformacion.js"></script>
	<script type="text/javascript" src="js/efecto3.js"></script>
	<noscript>
			<link rel="stylesheet" type="text/css" href="css/nojs.css" />
	</noscript>

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
    <script>
		$(document).ready(function(){
		  $('.gallery')._TMS({
			  show:0,
			  pauseOnHover:true,
			  prevBu:false,
			  nextBu:false,
			  playBu:false,
			  duration:700,
			  preset:'fade',
			  pagination:$('.img-pags').uCarousel({show:5,shift:0, rows:1}),
			  pagNums:false,
			  slideshow:7000,
			  numStatus:true,
			  banners:false,
			  waitBannerAnimation:false,
			  progressBar:false
		   })		
		 })
	  </script>
<body>
	<div class="wrapper">
		<header>
			<div class="logo">
				<a href="#"><img src="images/logo.png"></a>
		<nav>
        	<ul id="menu">
          		<li><a href="index.php">Inicio</a></li>
          		<li><a href="information.php?id=1">Informacion</a>
            		<ul>
              			<li><a href="pasatiempos.php">Pasatiempos</a></li>
              			<li><a href="escolaridad.php?id=1">Escolaridad</a></li>
              			<li><a href="logros.php?id=1">Logros</a></li>
            		</ul>  
          		</li>
          		<li><a href="">Galeria</a></li>
          		<li><a href="aboutus.php">Sobre Nosotros</a></li>
        	</ul>
      </nav>
		</header>

		<section id="content"><div class="ic"></div>
    	<div class="container_24">
            
            <div class="grid_23 prefix_1">
            	<h2 class="top-3">Nuestra Galeria:</h2>
                <div class="border">
                    <div id="slide" class="top-8">		
                        <div class="gallery">
                            <ul class="items">
                                <li><img src="images/gallery-1-big.jpg" alt=""></li>
                                <li><img src="images/gallery-2-big.jpg" alt=""></li>
                                <li><img src="images/gallery-3-big.jpg" alt=""></li>
                                <li><img src="images/gallery-4-big.jpg" alt=""></li>
                                <li><img src="images/gallery-5-big.jpg" alt=""></li>
                                <li><img src="images/gallery-1-big.jpg" alt=""></li>
                                <li><img src="images/gallery-2-big.jpg" alt=""></li>
                                <li><img src="images/gallery-3-big.jpg" alt=""></li>
                                <li><img src="images/gallery-4-big.jpg" alt=""></li>
                                <li><img src="images/gallery-5-big.jpg" alt=""></li>
                            </ul>
                        </div>
                     </div> 
                     <div class="pag">
                         <div class="img-pags">
                            <ul>
                              <li><a href="#"><img src="images/gallery-1.jpg" alt=""><span></span></a></li>
                              <li><a href="#"><img src="images/gallery-2.jpg" alt=""><span></span></a></li>
                              <li><a href="#"><img src="images/gallery-3.jpg" alt=""><span></span></a></li>
                              <li><a href="#"><img src="images/gallery-4.jpg" alt=""><span></span></a></li>
                              <li><a href="#"><img src="images/gallery-5.jpg" alt=""><span></span></a></li>
                              <li><a href="#"><img src="images/gallery-1.jpg" alt=""><span></span></a></li>
                              <li><a href="#"><img src="images/gallery-2.jpg" alt=""><span></span></a></li>
                              <li><a href="#"><img src="images/gallery-3.jpg" alt=""><span></span></a></li>
                              <li><a href="#"><img src="images/gallery-4.jpg" alt=""><span></span></a></li>
                              <li><a href="#"><img src="images/gallery-5.jpg" alt=""><span></span></a></li>
                           </ul>
                        </div>
                        <a href="#" class="gallery-button gallery-button-1" data-type="prevPage">Preview</a>
                        <a href="#" class="gallery-button gallery-button-2" data-type="nextPage">Next</a>
                    </div>  
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </section> 


</div>

		<?php include 'footer.php'; ?>