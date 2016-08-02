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
        $.ajax({
            url: "./json/jsonInformacionBasica.php",
            type:"GET",
            dataType:"json",
            success: function (resultado) {
                if(resultado != ""){

                }
            }
        })
    }
}

$(document).ready(function () {
    cargaID.init();
});