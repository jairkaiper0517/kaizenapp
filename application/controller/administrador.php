<?php

class Administrador extends Controller
{
  public $modeloAdministrador = null;

  function __construct(){
    $this->modeloAdministrador = $this->loadModel("modeloAdministrador");
  }
    // Vista principal por defecto
    public function index()
    {
        require APP . 'view/_templates_admin/header.php';
        require APP . 'view/principal_admin/index.php';
        require APP . 'view/_templates_admin/footer.php';
    }

    // Vista de perfil
    public function perfil()
    {
        require APP . 'view/_templates_admin/header.php';
        require APP . 'view/principal_admin/perfil.php';
        require APP . 'view/_templates_admin/footer.php';
    }

    // Vista de editar perfil
    public function editar_perfil()
    {
        require APP . 'view/_templates_admin/header.php';
        require APP . 'view/principal_admin/editar_perfil.php';
        require APP . 'view/_templates_admin/footer.php';
    }

    // Vista de publicaciones
    public function publicaciones()
    {
        require APP . 'view/_templates_admin/header.php';
        require APP . 'view/principal_admin/publicaciones.php';
        require APP . 'view/_templates_admin/footer.php';
    }

    // Vista de editar publicaciones
    public function editar_publicacion()
    {
        require APP . 'view/_templates_admin/header.php';
        require APP . 'view/principal_admin/editar_publicacion.php';
        require APP . 'view/_templates_admin/footer.php';
    }

    // Vista de crear publicaciones
    public function crear_publicacion()
    {
        require APP . 'view/_templates_admin/header.php';
        require APP . 'view/principal_admin/crear_publicacion.php';
        require APP . 'view/_templates_admin/footer.php';
    }

    // Vista de usuarios registrados
    public function usuarios_registrados()
    {
        require APP . 'view/_templates_admin/header.php';
        require APP . 'view/principal_admin/usuarios_registrados.php';
        require APP . 'view/_templates_admin/footer.php';
    }

    // Listar
  	public function listarUsuarios(){
  		$usuarios = $this->modeloAdministrador->listarUsuarios();
  		// Convierte el array en json
  		echo json_encode($usuarios);
  	}

    public function listarPublicaciones(){
      $publicaciones = $this->modeloAdministrador->listarPublicaciones();
      echo json_encode($publicaciones);
    }


}
