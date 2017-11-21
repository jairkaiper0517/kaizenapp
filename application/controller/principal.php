<?php

class Principal extends Controller
{
    public $modeloUsuario = null;

    function __construct(){
      $this->modeloUsuario = $this->loadModel("modeloUsuario");
    }

    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/principal/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function cincoS()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/principal/5S.php';
        require APP . 'view/_templates/footer.php';
    }

    public function hansei()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/principal/hansei.php';
        require APP . 'view/_templates/footer.php';
    }

    public function mudas()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/principal/mudas.php';
        require APP . 'view/_templates/footer.php';
    }

    public function pokayoke()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/principal/pokayoke.php';
        require APP . 'view/_templates/footer.php';
    }


    public function glosario()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/principal/glosario.php';
        require APP . 'view/_templates/footer.php';
    }


    public function kanban()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/principal/kanban.php';
        require APP . 'view/_templates/footer.php';
    }

    public function primeraS()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/principal/1S.php';
        require APP . 'view/_templates/footer.php';
    }


    public function propositos()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/principal/propositos.php';
        require APP . 'view/_templates/footer.php';
    }

    public function prueba()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/principal/prueba.php';
        require APP . 'view/_templates/footer.php';
    }


    // =================== REGISTRAR USUARIO ================= //

  public function registrarUsuario(){

      // FormData envia los datos a traves del name
      $nombre = $_POST['txtNombre'];
      $correo = $_POST['txtCorreo'];
      $contrasena = $_POST['txtContrasena'];
      $contrasena2 = $_POST['txtContrasena2'];
      $rol = 1;

      // Validar campos vacios
      if(empty($nombre) or empty($correo) or
         empty($contrasena) or empty($contrasena2)){

        echo json_encode(array("error" => true,
                               "mensaje" => "Por favor ingrese todo los campos."));

     }else

     //  Validar la contraseña
     if ($contrasena != $contrasena2){

        echo json_encode(array("error" => true,
                               "mensaje" => "La contraseña no coincide, por favor verifique."));
    }else{

      // Envia los datos
      $this->modeloUsuario->__SET('_CORREO',$correo);
      // Recibe la respuesta del modeloUsuario
      $respuesta = $this->modeloUsuario->consultarUsuario();
      // Respuesta de colsultarUsuario
      if ($respuesta != false){

        echo json_encode(array("error" => true,
                               "mensaje" => "Esta direccion de correo ya se encuentra registrada."));
      }else{

        $this->modeloUsuario->__SET('_NOMBRE',$nombre);
        $this->modeloUsuario->__SET('_CORREO',$correo);
        $this->modeloUsuario->__SET('_CONTRASENA',$contrasena);
        $this->modeloUsuario->__SET('_ROL',$rol);
        $respuesta = $this->modeloUsuario->registrarUsuario();

        if($respuesta == true){
          echo json_encode(array("error" => false,
                                 "mensaje" => "Se ha registrado exitosamente."));
        }else{
          echo json_encode(array("error" => true,
                                 "mensaje" => "Ocurrió un error."));
        }
      }
    }
}




    // =================== REGISTRAR TAREA ================= //

    // Nueva Tarea

public function registrarTarea(){

  // FormData envia los datos a traves del name
  $tarea = $_POST['txtTarea'];

  if(empty($tarea)){

    echo json_encode(array('resultado' => false,
      'mensaje' => "El campo tarea es obligatorio."));

  }else {
    $this->modeloUsuario->__SET('_TAREA',$tarea);
    $respuesta = $this->modeloUsuario->registrarTarea();
    echo json_encode($respuesta);

  }

}


// Nueva Tarea

public function editarToDo(){

// FormData envia los datos a traves del name
$id = $_POST['txtIdE'];
$tarea = $_POST['txtTareaE'];

if(empty($tarea) or empty($id)){

echo json_encode(array('resultado' => false,
                       'mensaje' => "Debe seleccionar una tarea."));

}else {

  // echo json_encode(array('id' => $id,
  //                        'tarea' => $tarea));

    $this->modeloUsuario->__SET('_ID',$id);
    $this->modeloUsuario->__SET('_TAREA',$tarea);
    $respuesta = $this->modeloUsuario->editarToDo();
    echo json_encode($respuesta);

}

}


public function editarDoing(){

// FormData envia los datos a traves del name
$id = $_POST['txtIdE'];
$tarea = $_POST['txtTareaE'];

if(empty($tarea) or empty($id)){

echo json_encode(array('resultado' => false,
                       'mensaje' => "Debe seleccionar una tarea."));

}else {

  // echo json_encode(array('id' => $id,
  //                        'tarea' => $tarea));

    $this->modeloUsuario->__SET('_ID',$id);
    $this->modeloUsuario->__SET('_TAREA',$tarea);
    $respuesta = $this->modeloUsuario->editarDoing();
    echo json_encode($respuesta);

}

}


public function editarDone(){

// FormData envia los datos a traves del name
$id = $_POST['txtIdE'];
$tarea = $_POST['txtTareaE'];

if(empty($tarea) or empty($id)){

echo json_encode(array('resultado' => false,
                       'mensaje' => "Debe seleccionar una tarea."));

}else {

  // echo json_encode(array('id' => $id,
  //                        'tarea' => $tarea));

    $this->modeloUsuario->__SET('_ID',$id);
    $this->modeloUsuario->__SET('_TAREA',$tarea);
    $respuesta = $this->modeloUsuario->editarDone();
    echo json_encode($respuesta);

}

}


public function registrarToDo(){

  // FormData envia los datos a traves del name
  // id autoincrementable pero para los regresos se toman los id de los txt
  $id = $_POST['txtid'];
  $tarea = $_POST['txttarea'];

  if(empty($id) or empty($tarea)){

    echo json_encode(array('resultado' => false,
      "mensaje" => "Todos los campos son obligatorios"));

  }else {

    $this->modeloUsuario->__SET('_ID',$id);
    $this->modeloUsuario->__SET('_TAREA',$tarea);
    $respuesta = $this->modeloUsuario->registrarToDo();
    echo json_encode($respuesta);

  }
}

    // Doing

public function registrarDoing(){

      // FormData envia los datos a traves del name
  $id = $_POST['txtid'];
  $tarea = $_POST['txttarea'];

  if(empty($id) or empty($tarea)){

    echo json_encode(array('resultado' => false,
      "mensaje" => "Todos los campos son obligatorios"));

  }else {

    $this->modeloUsuario->__SET('_ID',$id);
    $this->modeloUsuario->__SET('_TAREA',$tarea);

    $respuesta = $this->modeloUsuario->registrarDoing();

    echo json_encode($respuesta);

  }


}


public function registrarDone(){

      // FormData envia los datos a traves del name

  $id = $_POST['txtid'];
  $tarea = $_POST['txttarea'];

  if(empty($id) or empty($tarea)){

    echo json_encode(array('resultado' => false,
      "mensaje" => "Todos los campos son obligatorios"));

  }else {

    $this->modeloUsuario->__SET('_ID',$id);
    $this->modeloUsuario->__SET('_TAREA',$tarea);
    $respuesta = $this->modeloUsuario->registrarDone();
    echo json_encode($respuesta);

  }


}


public function registrarHansei(){

      // FormData envia los datos a traves del name
  $id = $_POST['txtid'];
  $tarea = $_POST['txttarea'];

  if(empty($id) or empty($tarea)){

    echo json_encode(array('resultado' => false,
      "mensaje" => "Todos los campos son obligatorios"));

  }else {

    $this->modeloUsuario->__SET('_ID',$id);
    $this->modeloUsuario->__SET('_TAREA',$tarea);
    $respuesta = $this->modeloUsuario->registrarHansei();
    echo json_encode($respuesta);

  }


}


        // =================== ELIMINAR TAREA ================= //

public function eliminarToDo(){

  $id = $_POST['id'];
  $this->modeloUsuario->__SET('_ID',$id);
  $respuesta = $this->modeloUsuario->eliminarToDo();
  echo json_encode(array('resultado' => true, "mensaje" => "Eliminado exitosamente"));

}


        // =================== ELIMINAR TAREA ================= //

public function eliminarDoing(){

  $id = $_POST['id'];
  $this->modeloUsuario->__SET('_ID',$id);
  $respuesta = $this->modeloUsuario->eliminarDoing();
  echo json_encode(array('resultado' => true, "mensaje" => "Eliminado exitosamente"));
}


public function eliminarDone(){

  $id = $_POST['id'];
  $this->modeloUsuario->__SET('_ID',$id);
  $respuesta = $this->modeloUsuario->eliminarDone();
  echo json_encode(array('resultado' => true, "mensaje" => "Eliminado exitosamente"));
}


public function eliminarHansei(){

  $id = $_POST['id'];
  $this->modeloUsuario->__SET('_ID',$id);
  $respuesta = $this->modeloUsuario->eliminarHansei();
  echo json_encode(array('resultado' => true, "mensaje" => "Eliminado exitosamente"));
}



public function listarGlosario(){
  $glosario = $this->modeloUsuario->listarGlosario();
  // Convierte el array en json
  echo json_encode($glosario);
}

public function listarToDo(){
  $toDo = $this->modeloUsuario->listarToDo();
      // Convierte el array en json
  echo json_encode($toDo);
}

public function listarDoing(){
  $doing = $this->modeloUsuario->listarDoing();
      // Convierte el array en json
  echo json_encode($doing);
}

public function listarDone(){
  $done = $this->modeloUsuario->listarDone();
      // Convierte el array en json
  echo json_encode($done);
}

public function listarHansei(){
  $hansei = $this->modeloUsuario->listarHansei();
      // Convierte el array en json
  echo json_encode($hansei);
}


    // =================== LISTAR PROPOSITOS ================= //

public function listarPropositosInternos(){
  $propositosInternos = $this->modeloUsuario->listarPropositosInternos();
      // Convierte el array en json
  echo json_encode($propositosInternos);
}

public function listarPropositosExternos(){
  $propositosExternos = $this->modeloUsuario->listarPropositosExternos();
      // Convierte el array en json
  echo json_encode($propositosExternos);
}

}
