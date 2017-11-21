window.onload = function() {
  ListarPublicaciones();
};


// Listar las publicaciones

var xhr = new XMLHttpRequest();

function ListarPublicaciones(){

    xhr.open("GET", url + "administrador/listarPublicaciones", true);
    xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200) {
      var json = JSON.parse(xhr.responseText);
      console.log(json);

      var i = 0;
      while (i < json.length) {

          var columId = "<td>" + json[i].id + "</td>";
          var columAut = "<td>" + json[i].nombre + "</td>";
          var columTitle = "<td>" + json[i].titulo + "</td>";
          var columFecha = "<td>" + json[i].fecha + "</td>";
          var btnVer = "<td><button class='btn bg-success btn-xs' type='button'>Ver</button></td>";
          var filas = "<tr>" + columId + columAut + columTitle + columFecha + btnVer +"</tr>";
          //Envia las filas a medida que recorre el ciclo
          $("#tablaPublicaciones tbody").append(filas);
          i++;
      }
    }
  }
    xhr.send();
}
