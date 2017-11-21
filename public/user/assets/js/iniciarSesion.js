	$(document).ready(function() {
		console.log('test login');
		iniciarSesion();
	});


	// ================  INICIAR SESION =============== //

	var btnIniciar = document.getElementById('btnIniciarS');
	var divMensajeLogin = document.getElementById('mensajeLogin');

	var xhr = new XMLHttpRequest();

	function iniciarSesion(){

		var Formulario = document.getElementById("frmLogin");

		var Datos = new FormData(Formulario);
		console.log(Datos);

		for([key, value] of Datos.entries()){

			console.log(key + ': '+ value);
		}

		xhr.open('POST', url + 'login/iniciarSesion', true);
		xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
		xhr.onreadystatechange = function(){

			if (xhr.readyState == 4 && xhr.status == 200){

				var json = JSON.parse(xhr.responseText);
				console.log(json);

				if (json.usuarioValido == true && json.rol == 1){
					window.location = url + "principal/propositos";
				}else if(json.usuarioValido == true && json.rol == 2){
					window.location = url + "administrador/index";
				}else{
					divMensajeLogin.innerHTML = json.mensaje;
				}

			}

		}

		xhr.send(Datos);

	}


	btnIniciar.addEventListener('click',function(e){
		iniciarSesion();
	});
