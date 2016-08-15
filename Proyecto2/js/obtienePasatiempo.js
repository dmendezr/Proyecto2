/**
 * Created by Diego on 15/8/2016.
 */

var app = {
    init: function () {
        this.cargarInformacion();
    },
    cargarInformacion:function () {
        $.ajax({
            url: "./json/jsonPasatiempos.php?id="+enviaID(),
            type:"GET",
            dataType:"json",
            success: function (resultado) {
                if(resultado != ""){
                    $('.pasatiempos-contenido').empty();
                    for(var i = 0; i< resultado.length; i++) {
                        $('.pasatiempos-contenido').append(
                        '<img src="'+resultado[i].foto+'" class="rotate3D">'
                        );
                    }
                }else {
                    window.alert("Esta vacio")
                }
            },
            complete: function () {

            },
            error: function( jqxhr, textStatus, error ) {
                var err = textStatus + ", " + error;
                window.alert( "Request Failed: " + err );
            }

        })
    }
}

$(document).ready(function () {
    app.init();
    $(".rotate3D").click(function(){
        window.alert("Hizo click");
        $("#light").css({"display": "block"});
        $("#fade").css({"display": "block"});
    })
    $("#fade").click(function(){
        $("#light").css({"display": "none"});
        $("#fade").css({"display": "none"});
    })
});