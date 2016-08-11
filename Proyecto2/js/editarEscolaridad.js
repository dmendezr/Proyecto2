/**
 * Created by Diego on 4/8/2016.
 */

var app = {
    init: function () {
        this.cargarInformacion();
    },
    cargarInformacion:function () {
        // var nombre = $('nombre').val()

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
                    '<td>' + '<label for="observaciones">Observaciones</label>'+'</td>'+
                        '<td>' + '<label for="acciones">Acciones</label>'+'</td>'+
                        +'</tr>');
                    for(var i = 0; i< resultado.length; i++) {
                        //var instEduc = $(("#INST_"+resultado[i].ID).val());
                        //window.alert(instEduc);
                        $('#registrosEscolaridad').append('<tr>'+
                            '<td><input type="text" class="columnaConfig" name="institucionEducativa" value="' + resultado[i].InstitucionEduc +'"id="INST_'+resultado[i].ID+'"></td>'+
                            '<td><input type="text" class="columnaConfig" name="tituloObtenido" value="' + resultado[i].TituloObtenido +'"id="TIT_OB_'+resultado[i].ID+'"></td>'+
                            '<td><input type="text" class="columnaConfig" name="añoInicio" value="' + resultado[i].AñoInicio +'"id="ANNO_IN_'+resultado[i].ID+'"></td>'+
                            '<td><input type="text" class="columnaConfig" name="añoCulminacion" value="' + resultado[i].AñoCulminacion +'"id="ANNO_FN_'+resultado[i].ID+'"></td>'+
                            '<td><input type="text" class="columnaConfig" name="observaciones" value="' + resultado[i].Observaciones +'"id="OBS_'+resultado[i].ID+'"></td>'+
                            '<td>' +
                            '<a href="" onclick="editarEscolaridad.init('+resultado[i].ID+')"><img src="images/editarConfiguracion1.png" id="editarConfiguracionIcon"></a>' +
                            '<a href=""><img src="images/eliminar.png" id="editarConfiguracionIcon"></a>' +
                            '<a href=""><img src="images/hide.png" id="editarConfiguracionIcon"></a>'+
                            '</td>'+
                            '</tr>'
                    );
                    }
                }else {
                    window.alert("Esta vacio")
                }
            },
            complete: function () {
                //window.alert($("#INST_1").val());
            },
            error: function( jqxhr, textStatus, error ) {
                var err = textStatus + ", " + error;
                window.alert( "Request Failed: " + err );
            }
            
        })
    }
}

var editarEscolaridad = {
    init: function (id) {
        var instEduc = ($("#INST_"+id).val());
        //this.updateColumna(id,inst,titulo,annoIni, annoFin,observaciones )
    },

    updateColumna: function(id,inst,titulo,annoIni, annoFin,observaciones ) {
        $.ajax({
            url: "./bl/updateEscolaridad.php",
            type: "POST",
            data: {'id' : id,'inst' : inst, 'titulo' : titulo, 'annoIni' : annoIni, 'annoFin' : annoFin, 'observaciones' : observaciones},
            success: function(resultado) {
                if (resultado == 1) {
                    window.alert("Registro Actualizado")
                }
            },
            complete:function () {
                window.alert("Registro Actualizado")
                app.init()
            }
            ,
            error: function( jqxhr, textStatus, error ) {
                var err = textStatus + ", " + error;
                console.log( "Request Failed: " + err );
            }
        });
    }
}

$(document).ready(function () {
    app.init()

 });

$(document).ready(function () {
    // var instEduc = $(("#INST_"+resultado[i].ID).val());
    // window.alert(Hola);
})

