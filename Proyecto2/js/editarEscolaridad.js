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
                        $('#registrosEscolaridad').append('<tr>'+
                            '<td><input type="text" class="columnaConfig" name="institucionEducativa" value="' + resultado[i].InstitucionEduc +'"id="INST_'+resultado[i].ID+'"></td>'+
                            '<td><input type="text" class="columnaConfig" name="tituloObtenido" value="' + resultado[i].TituloObtenido +'"id="TIT_OB_'+resultado[i].ID+'"></td>'+
                            '<td><input type="number" class="columnaConfig" name="añoInicio" value="' + resultado[i].AñoInicio +'"id="ANNO_IN_'+resultado[i].ID+'"></td>'+
                            '<td><input type="number" class="columnaConfig" name="añoCulminacion" value="' + resultado[i].AñoCulminacion +'"id="ANNO_FN_'+resultado[i].ID+'"></td>'+
                            '<td><input type="text" class="columnaConfig" name="observaciones" value="' + resultado[i].Observaciones +'"id="OBS_'+resultado[i].ID+'"></td>'+
                            '<td>' +
                            '<a href="#" onclick="editarEscolaridad.init('+resultado[i].ID+')"><img src="images/editarConfiguracion1.png" id="editarConfiguracionIcon"></a>' +
                            '<a href="#"><img onclick="eliminaRegistroEscolaridad.init('+resultado[i].ID+')" src="images/eliminar.png" id="editarConfiguracionIcon"></a>' +
                            '<a href="#"><img src="images/hide.png" id="editarConfiguracionIcon"></a>'+
                            '</td>'+
                            '</tr>'
                    );
                    }
                    $('#registrosEscolaridad').append('<tr id="filaNuevoIngreso">' + '</tr>')
                    $('#registrosEscolaridad').append('<a href="#" onclick="ingresaFilaNueva.init()">'+'Nuevo'+'</a>')
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
        var inst = ($("#INST_"+id).val());
        var titulo = ($("#TIT_OB_"+id).val());
        var annoIni = ($("#ANNO_IN_"+id).val());
        var annoFin = ($("#ANNO_FN_"+id).val());
        var observaciones = ($("#OBS_"+id).val());
        this.updateColumna(id,inst,titulo,annoIni, annoFin,observaciones );
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
                app.init()
            },
            error: function( jqxhr, textStatus, error ) {
                var err = textStatus + ", " + error;
                console.log( "Request Failed: " + err );
            }
        });
    }
}

var ingresaFilaNueva = {
    init: function () {
        $('#filaNuevoIngreso').empty();
        $('#filaNuevoIngreso').append(
            '<td><input type="text" class="columnaConfig" name="institucionEducativaNuevo" id="ADD_INST"></td>'+
            '<td><input type="text" class="columnaConfig" name="tituloObtenidoNuevo" id="ADD_TITULO"></td>'+
            '<td><input type="number" class="columnaConfig" name="annoInicioNuevo" id="ADD_ANNO_INI"></td>'+
            '<td><input type="number" class="columnaConfig" name="annoFinNuevo" id="ADD_ANNO_FIN"></td>'+
            '<td><input type="text" class="columnaConfig" name="observaciones" id="ADD_OBS"></td>'+
            '<td><a href="#" onclick="ingresaRegistroEscolaridad.init()">Guardar</a></td>')
    }
}

var ingresaRegistroEscolaridad = {
    init: function () {
        var cedula = enviaID();
        var inst = ($("#ADD_INST").val());
        var titulo = ($("#ADD_TITULO").val());
        var annoIni = ($("#ADD_ANNO_INI").val());
        var annoFin = ($("#ADD_ANNO_FIN").val());
        var observaciones = ($("#ADD_OBS").val());
        this.insertRegistro(cedula,inst,titulo,annoIni,annoFin,observaciones)
    },
    insertRegistro: function (cedula,inst,titulo,annoIni,annoFin,observaciones) {
        $.ajax({
            url: "./bl/insertEscolaridad.php",
            type: "POST",
            data: {'cedula' : cedula,'inst' : inst, 'titulo' : titulo, 'annoIni' : annoIni, 'annoFin' : annoFin, 'observaciones' : observaciones},
            success: function(resultado) {
                if (resultado == 1) {
                    window.alert("Registro Guardado")
                }
            },
            complete:function () {
                app.init()
            },
            error: function( jqxhr, textStatus, error ) {
                var err = textStatus + ", " + error;
                console.log( "Request Failed: " + err );
            }
        })
    }
}

var eliminaRegistroEscolaridad = {
    init : function (id) {
        var respuesta = confirm("Desea eliminar el Registro?")
        if (respuesta){
            this.eliminaRegistro(id)
        }
    },
    eliminaRegistro: function(id){
        $.ajax({
            url: "./bl/deleteEscolaridad.php",
            type: "POST",
            data: {'id':id},
            success: function(resultado) {
                if (resultado == 1) {
                    window.alert("Registro Eliminado")
                }
            },
            complete:function () {
                app.init()
            },
            error: function( jqxhr, textStatus, error ) {
                var err = textStatus + ", " + error;
                console.log( "Request Failed: " + err );
            }
        })
    }
}


$(document).ready(function () {
    app.init()

 });


