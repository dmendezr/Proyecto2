/**
 * Created by Diego on 2/8/2016.
 */

var id = {
    init: function() {
        this.tomarId();
    },
    tomarId: function() {
        $.ajax({
            url: "./json/information.php",
            type: "GET",
            dataType: "json",
            success: function(resultado) {

            },
            complete: function() {
                alert("completado");
            }
        })
    }
}

var app = {
    init: function() {
        this.actualizaEstado();
    },
    actualizaEstado: function() {
        $.ajax({
            url: "./json/jsonProductos.php",
            type: "GET",
            dataType: "json",
            success: function(resultado) {

            },
            complete: function() {
                alert("completado");
            }
        })
    }
}
$(document).ready(
    function () {
        app.init();
    }
);
