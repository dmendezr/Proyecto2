/**
 * Created by Diego on 31/7/2016.
 */

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
    window.alert();
});