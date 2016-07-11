/*
$(document).ready(function(){
		$("#contenido-informacion").hover(
			function(){
				$("#encabezado-informacion").css({"background-color":"#8904B1"});
			},function(){
				$("#encabezado-informacion").css({"background-color":"white"});
			}
		);
});
*/
$(document).ready(function(){
		$(".contenido-informacion").hover(
			function(){
				$(".encabezado-informacion").css({"transform": "scale(0.8)"});
				$(".encabezado-informacion").css({"color": "#8904B1"});
			},function(){
				$(".encabezado-informacion").css({"transform": "inherit"});
				$(".encabezado-informacion").css({"color": "inherit"});
			}
		);
});
