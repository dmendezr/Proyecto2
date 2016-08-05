/**
 * Created by Diego on 4/8/2016.
 */

var app = {
    init: function () {
        this.cargarInformacion();
    },
    cargarInformacion:function () {
        //var nombre = $('nombre').val()

        $.ajax({
            url: "./json/jsonEscolaridad.php?id="+enviaID(),
            type:"GET",
            dataType:"json",
            success: function (resultado) {
                if(resultado != ""){
                    window.alert("Hay Informacion");
                    $('#registros').empty();
                    for(var i = 0; i< resultado.length; i++) {
                        $('#registros').append('<tr>'+
                            '<td><input type="text" name="institucionEducativa" value="' + resultado[i].InstitucionEduc +'"></td>'+
                            '<td><input type="text" name="tituloObtenido" value="' + resultado[i].TituloObtenido +'"></td>'+
                            '<td><input type="text" name="añoInicio" value="' + resultado[i].AñoInicio +'"></td>'+
                            '<td><input type="text" name="añoCulminacion" value="' + resultado[i].AñoCulminacion +'"></td>'+'</tr>'
                    );
                    }
                }else {
                    window.alert("Esta vacio")
                }
            },
            complete: function () {
                //window.alert();
            }
        })
    }
}

$(document).ready(function () {
    app.init()
 });