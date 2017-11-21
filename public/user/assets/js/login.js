$(document).ready(function() {
  console.log('test registrar');
});

// ================== VARIABLES ===============

// boton modal
var btnRegistrar = document.getElementById('btnRegistrar');
var btnCerrarRegistro = document.getElementById('btnCerrarRegistro');
// boton menu
var btnRegistrarse = document.getElementById("btnRegistrarse");
// formulario modal registro
var Formulario = document.getElementById("frmRegistro");
// variable para mensaje de respuesta en el modal de registro
var mensaje;
// div error
var divMensajeE = document.getElementById('mensajeError');
// div registro
var divMensajeR = document.getElementById('mensajeRegistro');


// ============== REGISTRAR USUARIO =======================

function RegistrarUsuario() {
  var Datos = new FormData(Formulario);
  for([key, value] of Datos.entries()){
    // console.log(key + ': '+ value);
  }

  xhr = new XMLHttpRequest();
  xhr.open('POST', url + 'principal/registrarUsuario' , true);
  // Para trabajar con formulario se requiere
  xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
  xhr.onreadystatechange = function(){

    if (xhr.readyState == 4 && xhr.status == 200){

      var json = JSON.parse(xhr.responseText);
      console.log(json);

      if(json.error == true){
        divMensajeE.innerHTML = json.mensaje;
        divMensajeR.innerHTML = null;
        
      }else if (json.error == false){

        cerrarModalR();

        swal(
          json.mensaje,
          'Ahora puede iniciar sesion',
          'success'
          );

        // divMensajeR.innerHTML = json.mensaje;
        divMensajeE.innerHTML = null;
      }
    }
  }
  xhr.send(Datos);
}

// =================== EVENTOS DE LOS BOTONES ================ //
btnRegistrar.addEventListener('click', function(e) {
  e.preventDefault();
  console.log('evento registrar');
  RegistrarUsuario();
  limpiarFrmRegistro();
  $('#txtNombre').focus();
});

btnRegistrarse.addEventListener('click',function(e){
  limpiarCampos();
});

btnRegistrarse.addEventListener('click',function(e){
  limpiarCampos();
});

btnCerrarRegistro.addEventListener('click', function(e){
  limpiarFrmRegistro();
});

// formulario oculto
function limpiarFrmRegistro(){
  $('#txtNombre').val(null);
  $('#txtCorreo').val(null);
  $('#txtContrasena').val(null);
  $('#txtContrasena2').val(null);
}

// CERRAR MODAL
function cerrarModalR() {
  $('#modalRegistro').modal('hide');
}
