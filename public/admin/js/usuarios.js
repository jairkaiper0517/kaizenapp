window.onload = function() {
  ListarUsuarios();
};

var xhr = new XMLHttpRequest();

// Lista los usuarios registrados en la bd
function ListarUsuarios() {

    // Ruta del controlador
    xhr.open("GET", url + "administrador/listarUsuarios", true);
    xhr.onreadystatechange = function() {
        console.log(xhr.readyState);
        console.log(xhr.status);

        if (xhr.readyState == 4 && xhr.status == 200) {
            var json = JSON.parse(xhr.responseText);
            console.log(json);

            var i = 0;
            while (i < json.length) {

                var columId = "<td>" + json[i].id + "</td>";
                var columNom = "<td>" + json[i].nombre + "</td>";
                var columCor = "<td>" + json[i].correo + "</td>";
                var columRol = "<td>" + json[i].descripcion + "</td>"; /*Nombre de rol */

                var btnEditar = "<td><button type='button' class='btn bg-success btn-xs'>Modificar</button></td>";
                var filas = "<tr>" + columId + columNom + columCor + columRol + btnEditar + "</tr>";
                //Envia las filas a medida que recorre el ciclo
                $("#tablaUsuarios tbody").append(filas);
                i++;
            }
        }
    }
    xhr.send();
}
