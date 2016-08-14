/**
 * Created by Roger on 13/8/2016.
 */
var app = {
    init: function () {
        this.cargarInformacion();
    },
    cargarInformacion:function () {
        $.ajax({
            url: "./json/jsonGaleria.php?id="+enviaID(),
            type:"GET",
            dataType:"json",
            success: function (resultado) {
                if(resultado != ""){
                    $('#imagenes').empty();
                    for(var i = 0; i< resultado.length; i++) {
                        $('#imagenes').append(
                            '<div class="imagen">'+
                            '<img src="'+resultado[i].ruta+'">'+
                            '<a href="#" onclick="">Eliminar</a> '+
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

var subirImagen = {
    init: function () {
        $("#nuevaImagen").append('<form enctype="multipart/form-data" method="">'+
            '<input name="uploadedfile" type="file"><br>'+
            '<input type="submit" value="Subir archivo">'+
            '</form>');

    },
    subeImagen:function () {

        $.ajax({
            url: "./json/jsonGaleria.php?id="+enviaID(),
            type:"GET",
            dataType:"json",
            success: function (resultado) {

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
