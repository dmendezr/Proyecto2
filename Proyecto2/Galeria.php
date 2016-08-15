<?php
if(isset($_GET['id'])) {
    $id= $_GET['id'];
}
include "header.php";
include 'bl/consultaGaleria.php';
?>
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
		<section id="content"><div class="ic"></div>
    	<div class="container_24">
            
            <div class="grid_23 prefix_1">
            	<h2 class="top-3">Nuestra Galeria:</h2>
                <div class="border">
                    <div id="slide" class="top-8">		
                        <div class="gallery">
                            <ul class="items">
                                <?php foreach ($datos as $linea){ ?>
                                    <li><a href="#"><img src="<?php echo $linea['ruta']?>" class="big_image" alt=""><span></span></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                     </div> 
                     <div class="pag">
                         <div class="img-pags">
                            <ul id="pags">
                                  <?php foreach ($datos as $linea){ ?>
                                      <li><a href="#"><img src="<?php echo $linea['ruta']?>" class="short_image" alt=""><span></span></a></li>
                                 <?php } ?>
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