$(document).ready(function() {
	
});

var frmOculto = document.getElementById('frmOculto');

function RegistrarToDo() {

  var Datos = new FormData(frmOculto);
      // console.log(Datos);
  for([key, value] of Datos.entries()){
    console.log(key + ': '+ value);
  }

  xhr = new XMLHttpRequest();
  xhr.open('POST', url + 'principal/registrarDoing' , true);
  // Para trabajar con formulario se requiere
  xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
  xhr.onreadystatechange = function(){

    if (xhr.readyState == 4 && xhr.status == 200){

      // var json = JSON.parse(xhr.responseText);

      // console.log(json);
 }


    }

    xhr.send(Datos);
    limpiarToDo();
    ListarToDo();
  }