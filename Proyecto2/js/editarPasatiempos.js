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
                            '<div class="linea-pasatiempo">'+
                            '<div class="imagen_pasatiempo">'+
                            '<img src="'+resultado[i].foto+'">'+
                            '</div>'+
                            '<div class="contenido-pasatiempo">'+
                            '<h2>Nombre</h2>'+
                            '<input type="text" value="'+resultado[i].nombre+'" id="NOM_'+resultado[i].id_pasatiempo+'">'+
                            '<h2>Descripcion</h2>'+
                            '<input type="text" value="'+resultado[i].descripcion+'" id="DES_'+resultado[i].id_pasatiempo+'">'+
                            '<a href="#" onclick="eliminaRegistroPasatiempo.init('+resultado[i].id_pasatiempo+').init('+resultado[i].id_pasatiempo+')">Eliminar</a>'+
                            '<a href="#" onclick="editarPasatiempo.init('+resultado[i].id_pasatiempo+')">Editar</a>'+
                            '</div>'+
                            '<div class="clear"></div>'+
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

var editarPasatiempo = {
    init: function (id) {
        var nombre = ($("#NOM_"+id).val());
        var descripcion = ($("#DES_"+id).val());
        this.updateColumna(id,nombre,descripcion);
    },

    updateColumna: function(id,nombre,descripcion ) {
        $.ajax({
            url: "./bl/updatePasatiempo.php",
            type: "POST",
            data: {'id' : id,'nombre' : nombre,'descripcion' : descripcion},
            success: function(resultado) {
                if (resultado == 1) {
                    window.alert("Registro Actualizado")
                }
            },
            complete:function () {
                app.init()
            },
            error: function( jqxhr, textStatus, error ) {
                var err = textStatus + ", " + error;
                console.log( "Request Failed: " + err );
            }
        });
    }
}

var eliminaRegistroPasatiempo = {
    init: function (id) {
        var respuesta = confirm("Desea eliminar el Registro?")
        if (respuesta) {
            this.eliminaRegistro(id)
        }
    },
    eliminaRegistro: function (id) {
        $.ajax({
            url: "./bl/deletePasatiempos.php",
            type: "POST",
            data: {'id': id},
            success: function (resultado) {
                if (resultado == 1) {
                    window.alert("Registro Eliminado")
                }
            },
            complete: function () {
                app.init()
            },
            error: function (jqxhr, textStatus, error) {
                var err = textStatus + ", " + error;
                console.log("Request Failed: " + err);
            }
        })
    }
}

$(document).ready(function () {
    app.init()

});