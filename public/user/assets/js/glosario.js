$(document).ready(function() {
  ListarGlosario();
});

var xhr = new XMLHttpRequest();

// Listar glosario!
function ListarGlosario() {

    // Ruta del controlador
    xhr.open("GET", url + "principal/listarGlosario", false);
    xhr.onreadystatechange = function() {
        console.log(xhr.readyState);
        console.log(xhr.status);

        if (xhr.readyState == 4 && xhr.status == 200) {
            var json = JSON.parse(xhr.responseText);
            
            console.log(json);

            var i = 0;
            while (i < json.length) {

                var columTermino = "<td id='termino'><b>" + json[i].termino + ": </b></td>";
                var columDefinicion = "<td>" + json[i].definicion + "</td>";

                var filas = "<tr>" + columTermino + columDefinicion + "</tr>";
                //Envia las filas a medida que recorre el ciclo
                $("#tablaGlosario tbody").append(filas);
                i++;
            }
        }
    }
    xhr.send();
    console.log("Listar Glosario");
}