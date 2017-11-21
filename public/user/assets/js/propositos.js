$(document).ready(function() {
	listarPropositosInternos();
	listarPropositosExternos();
});



var xhr = new XMLHttpRequest();

function listarPropositosInternos(){

	xhr.open('GET', url+'principal/listarPropositosInternos',null);

	xhr.onreadystatechange = function(){

		if(xhr.readyState == 4 && xhr.status == 200){

			var json = JSON.parse(xhr.responseText);
			console.log(json);

			var i = 0;

			while (i < json.length) {

				var select = "<option value="+json[i].id+">"+json[i].descripcion+"</option>"

				$("#cmbPropositosInternos").append(select);
				i++;
			}
		}
	}

	xhr.send();

}


function listarPropositosExternos(){

	xhr.open('GET', url+'principal/listarPropositosExternos',null);

	xhr.onreadystatechange = function(){

		if(xhr.readyState == 4 && xhr.status == 200){

			var json = JSON.parse(xhr.responseText);
			console.log(json);

			var i = 0;

			while (i < json.length) {

				var select = "<option value="+json[i].id+">"+json[i].descripcion+"</option>"

				$("#cmbPropositosExternos").append(select);
				i++;
			}
		}
	}

	xhr.send();

}
