<?php

class Login extends Controller
{
    public $modeloLogin = null;

    function __construct(){
      $this->modeloLogin = $this->loadModel("modeloLogin");
    }

    public function index()
	{
		$this->render("index", null, false);
	}


    // =================== INICIAR SESION ================= //

    public function iniciarSesion(){

      $correo = $_POST["txtCorreoL"];
      $contrasena = $_POST["txtContrasenaL"];

      $this->modeloLogin->__SET('_CORREO',$correo);
      $resultado = $this->modeloLogin->iniciarSesion();
      //
      // echo json_encode($resultado->correo);

      if($resultado != false){

        if($contrasena == $resultado->contrasena){
          $_SESSION["login"] = true;
          $_SESSION["email"] = $resultado->correo;
          $_SESSION["idRol"] = $resultado->rol;
          $_SESSION["urlFoto"] = $resultado->imagen;

          echo json_encode(array("usuarioValido" => true,
                                  "rol" => $resultado->rol,
                                  "mensaje" => "Bienvenido al sistema"));
        }else{
          echo json_encode(array("usuarioValido" => false,
                                  "mensaje" => "El correo o contraseña no son validos"));
        }
      }else{
        echo json_encode(array("usuarioValido" => false,
                                "mensaje" => "El correo o contraseña no son validos"));
      }

      return;

    }

    // ====================== CERRAR SESION ===================== //
    public function cerrarSesion()
    	{
    		session_destroy();
    		session_unset();
    		header('Location: '.URL."login/index");
    	}


  }

  ?>
