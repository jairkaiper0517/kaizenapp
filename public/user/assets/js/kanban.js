$(document).ready(function() {
    listarToDo();
    listarDoing();
    listarDone();
    listarHansei();
});

// ================== VARIABLES ===============
var btnMoverToDo = document.getElementById('btnMoverToDo');
var btnMoverDoing = document.getElementById('btnMoverDoing');
var btnMoverDone = document.getElementById('btnMoverDone');
var btnRegresarDone = document.getElementById('btnRegresarDone');
var btnRegresarDoing = document.getElementById('btnRegresarDoing');
var btnCerrarModal = document.getElementById('btnCerrarModal');

var btnDeleteToDo = document.getElementById('btnDeleteToDo');
var btnEditarToDo = document.getElementById('btnEditarToDo');

var btnDeleteDoing = document.getElementById('btnDeleteDoing');
var btnEditarDoing = document.getElementById('btnEditarDoing');

var btnDeleteDone = document.getElementById('btnDeleteDone');
var btnEditarDone = document.getElementById('btnEditarDone');

var btnModificar = document.getElementById('btnModificar');
var btnCancelarE = document.getElementById('btnCancelarE');
var txtId = document.getElementById('txtId');

// Formulario modal crear tarea
var frmKanban = document.getElementById('frmKanban');
var btnAñadir = document.getElementById('btnAñadir');
var divMensajeError = document.getElementById('mensajeErrorTarea');


// ============== REGISTRAR NUEVA TAREA =======================
function registrarTarea() {

    // Obteniendo datos del formulario crear tarea
    var Datos = new FormData(frmKanban);
    console.log(Datos);
    for ([key, value] of Datos.entries()) {
        console.log(key + ': ' + value);
    }

    xhr = new XMLHttpRequest();
    xhr.open('POST', url + 'principal/registrarTarea', false);
    // Para trabajar con formulario se requiere
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.onreadystatechange = function() {

        if (xhr.readyState == 4 && xhr.status == 200) {

            var json = JSON.parse(xhr.responseText);

            console.log(json);

            if (json.resultado == false) {
                divMensajeError.innerHTML = json.mensaje;
            } else {
                divMensajeError.innerHTML = null;
                cerrarModal();
            }
        }
    }

    xhr.send(Datos);
    console.log("registrar Nueva Tarea");
    limpiarToDo();
    listarToDo();
}

// Evento Boton Añadir
btnAñadir.addEventListener('click', function(e) {
    e.preventDefault();
    console.log('kanban');
    registrarTarea();
    limpiarfrmKanban();

});

// ===================== REGISTRAR ====================

// Registrar en ToDo

function registrarToDo() {

    // Obteniendo datos del formulario oculto
    var Datos = new FormData(frmOculto);
    console.log(Datos);
    for ([key, value] of Datos.entries()) {
        console.log(key + ': ' + value);
    }

    xhr = new XMLHttpRequest();
    xhr.open('POST', url + 'principal/registrarToDo', false);
    // Para trabajar con formulario se requiere
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.onreadystatechange = function() {

        if (xhr.readyState == 4 && xhr.status == 200) {

            var json = JSON.parse(xhr.responseText);

            console.log(json);
        }

    }

    xhr.send(Datos);
    console.log("registrar ToDo");
    limpiarToDo();
    listarToDo();
}

// ============================ EDITAR ========================

function editarToDo() {

    var frmEditar = document.getElementById('frmEditar');

    var Datos = new FormData(frmEditar);
    // console.log(Datos);
    for ([key, value] of Datos.entries()) {
        console.log(key + ': ' + value);
    }

    xhr = new XMLHttpRequest();
    xhr.open('POST', url + 'principal/editarToDo', false);
    // Para trabajar con formulario se requiere
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.onreadystatechange = function() {

        if (xhr.readyState == 4 && xhr.status == 200) {

            var json = xhr.responseText;
            console.log(json);
        }
    }
    xhr.send(Datos);
    console.log("editar ToDo");
    limpiarToDo();
    listarToDo();
}

function editarDoing() {

    var frmEditar = document.getElementById('frmEditar');

    var Datos = new FormData(frmEditar);
    // console.log(Datos);
    for ([key, value] of Datos.entries()) {
        console.log(key + ': ' + value);
    }

    xhr = new XMLHttpRequest();
    xhr.open('POST', url + 'principal/editarDoing', false);
    // Para trabajar con formulario se requiere
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.onreadystatechange = function() {

        if (xhr.readyState == 4 && xhr.status == 200) {

            var json = xhr.responseText;
            console.log(json);
        }
    }
    xhr.send(Datos);
    console.log("editar Doing");
    limpiarDoing();
    listarDoing();
}

function editarDone() {

    var frmEditar = document.getElementById('frmEditar');

    var Datos = new FormData(frmEditar);
    // console.log(Datos);
    for ([key, value] of Datos.entries()) {
        console.log(key + ': ' + value);
    }

    xhr = new XMLHttpRequest();
    xhr.open('POST', url + 'principal/editarDone', false);
    // Para trabajar con formulario se requiere
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.onreadystatechange = function() {

        if (xhr.readyState == 4 && xhr.status == 200) {

            var json = xhr.responseText;
            console.log(json);
        }
    }
    xhr.send(Datos);
    console.log("editar Done");
    limpiarDone();
    listarDone();
}

// Registrar en Doing

function registrarDoing() {

    var frmOculto = document.getElementById('frmOculto');

    var Datos = new FormData(frmOculto);
    // console.log(Datos);
    for ([key, value] of Datos.entries()) {
        console.log(key + ': ' + value);
    }

    xhr = new XMLHttpRequest();
    xhr.open('POST', url + 'principal/registrarDoing', false);
    // Para trabajar con formulario se requiere
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.onreadystatechange = function() {

        if (xhr.readyState == 4 && xhr.status == 200) {

            // var json = JSON.parse(xhr.responseText);
            // console.log(json);
        }
    }

    xhr.send(Datos);
    console.log("registrar Doing");
    limpiarDoing();
    listarDoing();
}

// Registrar en Done

function registrarDone() {

    var frmOculto = document.getElementById('frmOculto');

    var Datos = new FormData(frmOculto);
    // console.log(Datos);
    for ([key, value] of Datos.entries()) {
        console.log(key + ': ' + value);
    }

    xhr = new XMLHttpRequest();
    xhr.open('POST', url + 'principal/registrarDone', false);
    // Para trabajar con formulario se requiere
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.onreadystatechange = function() {

        if (xhr.readyState == 4 && xhr.status == 200) {

            // var json = JSON.parse(xhr.responseText);

            // console.log(json);
        }

    }

    xhr.send(Datos);
    limpiarDone();
    listarDone();
    console.log("registrar Done");
}

// Registrar en Hansei

function registrarHansei() {

    var frmOculto = document.getElementById('frmOculto');

    var Datos = new FormData(frmOculto);
    // console.log(Datos);
    for ([key, value] of Datos.entries()) {
        console.log(key + ': ' + value);
    }

    xhr = new XMLHttpRequest();
    xhr.open('POST', url + 'principal/registrarHansei', false);
    // Para trabajar con formulario se requiere
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.onreadystatechange = function() {

        if (xhr.readyState == 4 && xhr.status == 200) {

            // var json = JSON.parse(xhr.responseText);

            // console.log(json);
        }

    }

    xhr.send(Datos);
    limpiarHansei();
    listarHansei();
    console.log("registrar Hansei");
}

// ===================== LISTAR ========================

// Variable para trabajar con ajax

var xhr = new XMLHttpRequest();

// Listar ToDo

function listarToDo() {

    // Ruta del controlador
    xhr.open("GET", url + "principal/listarToDo", false);
    xhr.onreadystatechange = function() {
        // console.log(xhr.readyState);
        // console.log(xhr.status);

        if (xhr.readyState == 4 && xhr.status == 200) {
            var json = JSON.parse(xhr.responseText);

            // console.log(json);

            var i = 0;
            while (i < json.length) {

                var filas = "<ul class='list-group'><li class='list-group-item'><div class='checkbox' onclick='recibirDatos(`" + json[i].id + "`,`" + json[i].tarea + "`); mostrarBotonesToDo();'><input type='checkbox' class='checkb' value=`" + json[i].id + "`/><label class='ml-1'>" + json[i].tarea + "</label></div></li></ul>";

                $("#listaToDo").append(filas);
                i++;
            }
        }
    }
    xhr.send();
    console.log("Listar toDo");

}

// Listar Hansei

function listarHansei() {

    // Ruta del controlador
    xhr.open("GET", url + "principal/listarHansei", null);
    xhr.onreadystatechange = function() {
        // console.log(xhr.readyState);
        // console.log(xhr.status);

        if (xhr.readyState == 4 && xhr.status == 200) {
            var json = JSON.parse(xhr.responseText);

            // console.log(json);

            var i = 0;
            while (i < json.length) {

                // var filas = "<div class='card mb-2'><blockquote><label><input type='checkbox' value=''><p class='card-text p-2'>"+json[i].tarea+"</p></label></blockquote></div>";

                // var filas = "<ul class='list-group'><li class='list-group-item'><div><label class='ml-1'>" + json[i].tarea + "</label></div></li></ul>";
                var filas = "<ul class='list-group'><li class='list-group-item'><div class='checkbox' onclick='recibirDatos(`" + json[i].id + "`,`" + json[i].tarea + "`);'><input type='checkbox' class='checkb' value=`" + json[i].id + "`/><label class='ml-1'>" + json[i].tarea + "</label></div></li></ul>";



                $("#listaHansei").append(filas);
                i++;
            }
        }
    }
    xhr.send();
    console.log("Listar hansei");
}

// Listar Doing
function listarDoing() {

    // Ruta del controlador
    xhr.open("GET", url + "principal/listarDoing", null);
    xhr.onreadystatechange = function() {
        // console.log(xhr.readyState);
        // console.log(xhr.status);

        if (xhr.readyState == 4 && xhr.status == 200) {
            var json = JSON.parse(xhr.responseText);

            // console.log(json);

            var i = 0;
            while (i < json.length) {

                var filas = "<ul class='list-group'><li class='list-group-item'><div class='checkbox' onclick='recibirDatos(`" + json[i].id + "`,`" + json[i].tarea + "`); mostrarBotonesDoing();'><input type='checkbox' class='checkb' value=`" + json[i].id + "`/><label class='ml-1'>" + json[i].tarea + "</label></div></li></ul>";

                $("#listaDoing").append(filas);
                i++;
            }
        }
    }
    xhr.send();
    console.log("Listar Doing");
}

// Listar Done
function listarDone() {

    xhr.open("GET", url + "principal/listarDone", false);
    xhr.onreadystatechange = function() {

        if (xhr.readyState == 4 && xhr.status == 200) {
            var json = JSON.parse(xhr.responseText);

            var i = 0;
            while (i < json.length) {

                var filas = "<ul class='list-group'><li class='list-group-item'><div class='checkbox' onclick='recibirDatos(`" + json[i].id + "`,`" + json[i].tarea + "`); mostrarBotonesDone();'><input type='checkbox' class='checkb' value=`" + json[i].id + "`/><label class='ml-1'>" + json[i].tarea + "</label></div></li></ul>";
                $("#listaDone").append(filas);
                i++;
            }
        }
    }
    xhr.send();
    console.log("listar Done");
}

// OBTENER DATOS DEL CHECKBOX

function recibirDatos(_id, _tarea) {

    var id = _id;
    var tarea = _tarea;

    console.log(id);
    console.log(tarea);

    $("#txtid").val(id);
    $("#txttarea").val(tarea);

    $("#txtIdE").val(id);
    $("#txtTareaE").val(tarea);

    // var tareas = [];

    // tareas.push({ "id" : id, "tarea": tarea});

    // console.log(tareas);
}

function mostrarBotonesToDo(){
    console.log('mostrar botones ToDo');
    btnEditarToDo.style = "display: inline-block";
    btnDeleteToDo.style = "display: inline-block";
}

function mostrarBotonesDoing(){
    console.log('mostrar botones Doing');
    btnEditarDoing.style = "display: inline-block";
    btnDeleteDoing.style = "display: inline-block";
}

function mostrarBotonesDone(){
    console.log('mostrar botones Done');
    btnEditarDone.style = "display: inline-block";
    btnDeleteDone.style = "display: inline-block";
    
}

// ===================== ELIMINAR =======================

// Eliminar ToDo

function eliminarToDo() {

    var id = $('#txtid').val();

    $.ajax({
        url: url + 'principal/eliminarToDo',
        type: 'POST',
        dataType: 'json',
        data: {
            id: id
        }
    })
    .done(function(resultado) {
        if (resultado.resultado == true) {
            console.log("eliminar ToDo");
            limpiarToDo();
            listarToDo();
        } else {
            alert("Ocurrio un error");
        }

    })
    .fail(function(e) {
        console.log("" + e);
    });

}

// Eliminar Doing
function eliminarDoing() {

    var id = $('#txtid').val();

    $.ajax({
        url: url + 'principal/eliminarDoing',
        type: 'POST',
        dataType: 'json',
        data: {
            id: id
        }
    })
    .done(function(resultado) {
        if (resultado.resultado == true) {
            console.log(resultado.mensaje);
            limpiarDoing();
            listarDoing();
            console.log("eliminar Doing");
        } else {
            alert("Ocurrio un error");
        }

    })
    .fail(function(e) {
        console.log("" + e);
    });

}

// Eliminar Done
function eliminarDone() {

    var id = $('#txtid').val();

    $.ajax({
        url: url + 'principal/eliminarDone',
        type: 'POST',
        dataType: 'json',
        data: {
            id: id
        }
    })
    .done(function(resultado) {
        console.log("" + resultado)
        if (resultado.resultado == true) {
            console.log(resultado.mensaje);
            limpiarDone();
            listarDone();
            console.log("eliminar Done");
        } else {
            alert("Ocurrio un error");
        }

    })
    .fail(function(e) {
        console.log("" + e);
    });

}

// Eliminar Hansei
function eliminarHansei() {

    var id = $('#txtid').val();

    $.ajax({
        url: url + 'principal/eliminarHansei',
        type: 'POST',
        dataType: 'json',
        data: {
            id: id
        }
    })
    .done(function(resultado) {
        console.log("" + resultado)
        if (resultado.resultado == true) {
            console.log(resultado.mensaje);
            limpiarHansei();
            listarHansei();
            console.log("eliminar Hansei");
        } else {
            alert("Ocurrio un error");
        }

    })
    .fail(function(e) {
        console.log("" + e);
    });

}

// =============== EVENTOS BOTONES ===============

// MOVER TAREAS

btnMoverToDo.addEventListener('click', function(e) {
    e.preventDefault();

    registrarDoing();
    eliminarToDo();
    limpiarFrmOculto();

});

btnMoverDoing.addEventListener('click', function(e) {
    e.preventDefault();
    console.log('eliminar de doing');

    registrarDone();
    eliminarDoing();
    eliminarToDo();
    limpiarFrmOculto();

});

btnMoverDone.addEventListener('click', function(e) {
    e.preventDefault();
    console.log('eliminar de done');

    registrarHansei();
    limpiarFrmOculto();

});

// REGRESAR TAREAS

btnRegresarDone.addEventListener('click', function(e) {
    e.preventDefault();
    console.log('regresar done');
    registrarDoing();
    eliminarDone();
    eliminarHansei();
    limpiarDone();
    limpiarHansei();
    listarDone();
    listarHansei();
    limpiarFrmOculto();
});

btnRegresarDoing.addEventListener('click', function(e) {
    e.preventDefault();
    console.log('regresar doing');
    registrarToDo();
    eliminarDoing();
    eliminarDone();
    eliminarHansei();
    limpiarToDo();
    listarToDo();
    limpiarFrmOculto();

});

btnCerrarModal.addEventListener('click', function(e) {
    divMensajeError.innerHTML = null;
    console.log('cerrar modal');
});

btnModificar.addEventListener('click', function(e) {
    console.log('Editar');

    // falta condicion
    editarToDo();
    editarDoing();
    editarDone();

    // Cerrar modal editar
    $('#modalEditar').modal('hide');
    
});

btnCancelarE.addEventListener('click', function(e) {
    console.log('Cancelar edicion');

    // Cerrar modal editar
    $('#modalEditar').modal('hide');
    
});


btnDeleteToDo.addEventListener('click', function(e) {
    console.log('Eliminar ToDo');
    eliminarToDo();

});

btnDeleteDoing.addEventListener('click', function(e) {
    console.log('Eliminar Doing');
    eliminarDoing();
});

btnDeleteDone.addEventListener('click', function(e) {
    console.log('Eliminar Done');
    eliminarDone();
});

// LIMPIAR TABLAS

function limpiarToDo() {
    $("#listaToDo").empty();
    console.log("limpiar ToDo");
}

function limpiarDoing() {
    $("#listaDoing").empty();
    console.log("limpiar Doing");
}

function limpiarDone() {
    $("#listaDone").empty();
    console.log("limpiar Done");
}

function limpiarHansei() {
    $("#listaHansei").empty();
    console.log("limpiar Hansei");
}

// LIMPIAR FORMULARIOS

// formulario crear nueva tarea
function limpiarfrmKanban() {
    $('#txtTarea').val(null);
}

// formulario oculto
function limpiarFrmOculto() {
    $('#txtid').val(null);
    $('#txttarea').val(null);
}

// CERRAR MODAL
function cerrarModal() {
    $('#modalKanban').modal('hide');
}