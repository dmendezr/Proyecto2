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
                    $('#registrosEscolaridad').empty();
                    $('#registrosEscolaridad').append('<tr>' +
                    '<td>' + '<label for="institucionEducativa">Institucion Educativa</label>'+'</td>'+
                    '<td>' + '<label for="tituloObtenido">Titulo Obtenido</label>'+'</td>'+
                    '<td>' + '<label for="annoInicio">Anno de Inicio</label>'+'</td>'+
                    '<td>' + '<label for="annoCulminacion">Anno de Culminacion</label>'+'</td>'+
                        '<td>' + '<label for="descripcion">Descripcion</label>'+'</td>'+
                        +'</tr>');
                    for(var i = 0; i< resultado.length; i++) {
                        $('#registrosEscolaridad').append('<tr>'+
                            '<td><input type="text" name="institucionEducativa" value="' + resultado[i].InstitucionEduc +'"id="inst'+resultado[i].ID+'"></td>'+
                            '<td><input type="text" name="tituloObtenido" value="' + resultado[i].TituloObtenido +'"></td>'+
                            '<td><input type="text" name="añoInicio" value="' + resultado[i].AñoInicio +'"></td>'+
                            '<td><input type="text" name="añoCulminacion" value="' + resultado[i].AñoCulminacion +'"></td>'+'</tr>'
                    );
                    }
                    // $('#registrosEscolaridad').append ('</table>')
                }else {
                    window.alert("Esta vacio")
                }
            },
            complete: function () {
                window.alert($("#inst1").val());
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