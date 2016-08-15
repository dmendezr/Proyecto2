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
            url: "./json/jsonLogros.php?id="+enviaID(),
            type:"GET",
            dataType:"json",
            success: function (resultado) {
                if(resultado != ""){
                    $('#registrosLogros').empty();
                    $('#registrosLogros').append('<tr>' +
                        '<td>' + '<label for="logro">Logro</label>'+'</td>'+
                        '<td>' + '<label for="descripcion">Descripcion</label>'+'</td>'+
                        +'</tr>');
                    for(var i = 0; i< resultado.length; i++) {
                        $('#registrosLogros').append('<tr>'+
                            '<td><input type="text" class="columnaConfig" name="logro" value="' + resultado[i].logro +'"id="logro_'+resultado[i].id_logro+'"></td>'+
                            '<td><input type="text" class="columnaConfig" name="descripcion" value="' + resultado[i].descripcion +'"id="descripcion_'+resultado[i].id_logro+'"></td>'+
                            '<td>' +
                            '<a href="#" onclick="editarLogros.init('+resultado[i].id_logro+')"><img src="images/editarConfiguracion1.png" id="editarConfiguracionIcon"></a>' +
                            '<a href="#"><img onclick="eliminaRegistroLogros.init('+resultado[i].id_logro+')" src="images/eliminar.png" id="editarConfiguracionIcon"></a>' +
                            '<a href="#"><img src="images/hide.png" id="editarConfiguracionIcon"></a>'+
                            '</td>'+
                            '</tr>'
                        );
                    }
                    $('#registrosLogros').append('<tr id="filaNuevoIngreso">' + '</tr>')
                    $('#registrosLogros').append('<a href="#" onclick="ingresaFilaNueva.init()">'+'Nuevo'+'</a>')
                }else {
                    $('#registrosLogros').append('<tr id="filaNuevoIngreso">' + '</tr>')
                    ingresaFilaNueva.init();
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


var editarLogros = {
    init: function (id) {
        var logro = ($("#logro_"+id).val());
        var descripcion = ($("#descripcion_"+id).val());
        this.updateColumna(id,logro,descripcion);
    },

    updateColumna: function(id_logro,logro,descripcion) {
        $.ajax({
            url: "./bl/updateLogros.php",
            type: "POST",
            data: {'id_logro' : id_logro,'logro' : logro, 'descripcion' : descripcion},
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
            '<td><input type="text" class="columnaConfig" name="logro" id="ADD_logro"></td>'+
            '<td><input type="text" class="columnaConfig" name="descripcion" id="ADD_descripcion"></td>'+
            '<td><a href="#" onclick="ingresaRegistroLogros.init()">Guardar</a></td>')
    }
}

var ingresaRegistroLogros = {
    init: function () {
        var cedula = enviaID();
        var logro = ($("#ADD_logro").val());
        var descripcion = ($("#ADD_descripcion").val());
        this.insertRegistro(cedula,logro,descripcion)
    },
    insertRegistro: function (cedula,logro,descripcion) {
        $.ajax({
            url: "./bl/insertLogros.php",
            type: "POST",
            data: {'cedula' : cedula,'logro' : logro, 'descripcion' : descripcion},
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

var eliminaRegistroLogros = {
    init : function (id) {
        var respuesta = confirm("Desea eliminar el Registro?")
        if (respuesta){
            this.eliminaRegistro(id)
        }
    },
    eliminaRegistro: function(id){
        $.ajax({
            url: "./bl/deleteLogros.php",
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


