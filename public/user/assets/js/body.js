
// $(function () {
// 	var $body = $('body');

// 	$body.find('button').on('click', function () {
		
// 		var boton = $(this);
// 		var claseAAplicar = boton.data('fondo');
// 		aplicarClase(claseAAplicar);
// 	});


// 	function aplicarClase (unaclase) {
// 		// Quita el fondo anterior y coloca el de cada pagina
// 		$body.removeClass();
// 		$body.addClass(unaclase);
// 	}

// 	// Carga el fondo del index principal
// 	// aplicarClase('fondoPagina1');
// });


$(document).ready(function() {
	

});

	var $body = $("body");
	var btnPropositos = $("btnPropositos");

	btnPropositos.addEventListener('click',function(e){
	  
		var claseAAplicar = btnPropositos.data('fondo');
		aplicarClase(claseAAplicar);
		
	});

	function aplicarClase(claseAAplicar){

		$body.removeClass();
		$body.addClass(claseAAplicar);

		aplicarClase('fondoPagina1');

	}

