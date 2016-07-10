
/*
$(document).ready(function() {    
    $(".rotate3D").hover(function(){
	for (var i = 0, limit = 100; i < limit; i++) {
    	$(this).css("transform", "rotateZ(90 deg)");
    	}}, function(){   
	});
    setInterval(changeColor, 3000);
});
*/

$(document).ready(function() {    
    $(".rotate3D").hover(function(){
		function rotate (){
    	for (var i = 0, limit = 100; i < limit; i++) {
    	$(this).css("transform", "rotateX(300deg)");
    	}
    	setInterval(rotate, 1000);
    }
    }, function(){   
	});
});

