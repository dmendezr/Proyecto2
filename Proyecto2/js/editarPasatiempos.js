/**
 * Created by Diego on 14/8/2016.
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
                    $('#pasatiempos').empty();
                    for(var i = 0; i< resultado.length; i++) {
                        $('#pasatiempos').append(
                            '<div class="imagen">'+
                            '<img src="'+resultado[i].foto+'">'+
                            '<a href="#" onclick="borrarImagen.init('+resultado[i].idgaleria+')">Eliminar</a> '+
                            '</div>'
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
    app.init()

});