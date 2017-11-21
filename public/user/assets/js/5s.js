
window.onload = function() {
	animateprogress("#progressBar",30);
	mostrarSeiri();
}

function animateprogress (id, val){

 	/* Declaro getRequestAnimationFrame intentando obtener la máxima compatibilidad con
 	todos los navegadores */
    var getRequestAnimationFrame = function () {
        return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        window.msRequestAnimationFrame ||
        function ( callback ){
            window.setTimeout(enroute, 1 / 60 * 1000);
        };
    };

    /* Declaro una instancia de getRequestAnimationFrame para llamar a la función animación */
    var fpAnimationFrame = getRequestAnimationFrame();
    var i = 0;
    var animacion = function () {

    if (i<=val)
        {
        	/*  Incremento el valor de la barra de progreso */
            document.querySelector(id).setAttribute("value",i);
            /* Incremento el porcentaje y lo muestro en la etiqueta span */
            document.querySelector(id+"+ span").innerHTML = i+"%";
            i++;
            /* Mientras que el contador no llega al porcentaje fijado la función vuelve a llamarse con
            fpAnimationFrame */
            fpAnimationFrame(animacion);
        }
    }
 	/* Llamo la función animación por primera vez usando fpAnimationFrame para que se ejecute a 60fps */
    fpAnimationFrame(animacion);
}


function mostrarSeiri(){
	var seiri = document.getElementById('seiri'),
		seiton = document.getElementById('seiton'),
		seiso = document.getElementById('seiso'),
		seiketsu = document.getElementById('seiketsu'),
		shitsuke = document.getElementById('shitsuke');

		seiri.style = "display: inline-block";
		seiton.style = "display: none";
		seiso.style = "display: none";
		seiketsu.style = "display: none";
		shitsuke.style = "display: none";
};

function mostrarSeiton(){
	var seiri = document.getElementById('seiri'),
		seiton = document.getElementById('seiton'),
		seiso = document.getElementById('seiso'),
		seiketsu = document.getElementById('seiketsu'),
		shitsuke = document.getElementById('shitsuke');

		seiton.style = "display: inline-block";
		seiri.style = "display: none";
		seiso.style = "display: none";
		seiketsu.style = "display: none";
		shitsuke.style = "display: none";
};
function mostrarSeiso(){
	var seiri = document.getElementById('seiri'),
		seiton = document.getElementById('seiton'),
		seiso = document.getElementById('seiso'),
		seiketsu = document.getElementById('seiketsu'),
		shitsuke = document.getElementById('shitsuke');

		seiso.style = "display: inline-block";
		seiri.style = "display: none";
		seiton.style = "display: none";
		seiketsu.style = "display: none";
		shitsuke.style = "display: none";
};
function mostrarSeiketsu(){
	var seiri = document.getElementById('seiri'),
		seiton = document.getElementById('seiton'),
		seiso = document.getElementById('seiso'),
		seiketsu = document.getElementById('seiketsu'),
		shitsuke = document.getElementById('shitsuke');

		seiketsu.style = "display: inline-block";
		seiri.style = "display: none";
		seiton.style = "display: none";
		seiso.style = "display: none";
		shitsuke.style = "display: none";
};
function mostrarShitsuke(){
	var seiri = document.getElementById('seiri'),
		seiton = document.getElementById('seiton'),
		seiso = document.getElementById('seiso'),
		seiketsu = document.getElementById('seiketsu'),
		shitsuke = document.getElementById('shitsuke');

		shitsuke.style = "display: inline-block";
		seiri.style = "display: none";
		seiton.style = "display: none";
		seiso.style = "display: none";
		seiketsu.style = "display: none";
};
