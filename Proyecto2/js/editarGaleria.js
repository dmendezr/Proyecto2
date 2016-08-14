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

var borrarImagen = {
    init: function (id) {
        var respuesta = confirm("Desea eliminar el Registro?")
        if (respuesta){
            this.borrar(id)
        }
    },
    borrar:function (id) {

        $.ajax({
            url: "./bl/deleteGaleria.php",
            type:"POST",
            data:{'id':id},
            success: function (resultado) {
                window.alert("Registro Eliminado")
            },
            complete: function () {
                app.init()
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
