/**
 * Created by Diego on 31/7/2016.
 */

var idPersona;

var cargaID = {
    init: function () {
        this.cargaid();
    },
    cargaid : function () {
        $.ajax({
            url: "./confInformacionBasica.php",
            type: "GET",
            dataType: "json",
            success: function (resultado) {
                window.alert(resultado[0]);
            },
            complete:function () {

            }
        })
    }
    }


var app = {
    init: function () {
        this.cargarInformacion();
    },
    cargarInformacion:function () {
        var nombre = $('nombre').val()

        $.ajax({
            url: "./json/jsonInformacionBasica.php",
            type:"POST",
            data: {'nombre': nombre,},
            dataType:"json",
            success: function (resultado) {
                if(resultado != ""){

                }
            }
        })
    }
}

var ocultarColumnaSexo = {
    init: function (id,estadoColumna) {
        this.updateEstadoColumna(id,estadoColumna)
    },

    updateEstadoColumna: function(id,estadoColumna) {
        $.ajax({
        url: "./bl/ocultaCamposInformacion.php",
        type: "POST",
        data: {'id' : id,'estadoColumna' : estadoColumna},
        success: function(resultado) {
            if (resultado == 1) {
                window.alert("Registro Actualizado")
            }
        },
            complete:function () {

            }
            ,
        error: function( jqxhr, textStatus, error ) {
            var err = textStatus + ", " + error;
            console.log( "Request Failed: " + err );
        }
    });
    }
}



// $(document).ready(function () {
//     cargaID.init();
// });