<?php

class ModeloUsuario
{
  //Recibe los valores que envia el controlador
  public function __GET($atributo){
    return $this->$atributo;
  }

  public function __SET($atributo, $valor){
    $this->$atributo = $valor;
  }

//Llama a la funcion para conectarse a la base de datos
  function __construct($db){

    try {

      $this->db = $db;

    } catch (PDOException $e) {

      exit('No se pudo establecer la conexión a la base de datos.');
    }
  }


  // Consultar Usuarios

  public function consultarUsuario(){

    $sql="SELECT * FROM TblUsuarios where correo = :correo";

    $query = $this->db->prepare($sql);
    $query->bindValue(':correo', $this->__GET("_CORREO"), PDO::PARAM_STR);
    $query->execute();
    $respuesta = $query->fetch();

              /* se envia la respuesta de la base de datos al controlador
              principal.php */

              return $respuesta;
            }

  // Registrar Usuario

            public function registrarUsuario(){

              $sql="call SP_RegistrarUsuario(?,?,?,?)";

              $query = $this->db->prepare($sql);
              $query->bindValue('1', $this->__GET("_NOMBRE"), PDO::PARAM_STR);
              $query->bindValue('2', $this->__GET("_CORREO"), PDO::PARAM_STR);
              $query->bindValue('3', $this->__GET("_CONTRASENA"), PDO::PARAM_STR);
              $query->bindValue('4', $this->__GET("_ROL"), PDO::PARAM_INT);
              $respuesta = $query->execute();


              return $respuesta;
            }





// Registrar tarea en to do

            public function registrarTarea(){


              $sql="call SP_RegistrarTarea (?)";

              $query = $this->db->prepare($sql);
  // id autoincrementable
              $query->bindValue('1', $this->__GET("_TAREA"), PDO::PARAM_STR);
              return $query->execute();
              $respuesta = $query->fetchAll();

  /* se envia la respuesta de la base de datos al controlador
  principal.php */

  return $respuesta;

}

// registrar to do
public function registrarToDo(){


  $sql="call SP_RegistrarToDo (?,?)";

  $query = $this->db->prepare($sql);
      // id autoincrementable y tambien opcional de ingreso
  $query->bindValue('1', $this->__GET("_ID"), PDO::PARAM_INT);
  $query->bindValue('2', $this->__GET("_TAREA"), PDO::PARAM_STR);
  return $query->execute();
  $respuesta = $query->fetchAll();

      /* se envia la respuesta de la base de datos al controlador
      principal.php */

      return $respuesta;

    }

// ============================= EDITAR ======================= //
public function editarToDo(){


  $sql="call SP_EditarToDo (?,?)";

  $query = $this->db->prepare($sql);
      // id autoincrementable y tambien opcional de ingreso
  $query->bindValue('1', $this->__GET("_ID"), PDO::PARAM_INT);
  $query->bindValue('2', $this->__GET("_TAREA"), PDO::PARAM_STR);
  return $query->execute();
  $respuesta = $query->fetchAll();

      /* se envia la respuesta de la base de datos al controlador
      principal.php */

      return $respuesta;

    }


public function editarDoing(){


  $sql="call SP_EditarDoing (?,?)";

  $query = $this->db->prepare($sql);
      // id autoincrementable y tambien opcional de ingreso
  $query->bindValue('1', $this->__GET("_ID"), PDO::PARAM_INT);
  $query->bindValue('2', $this->__GET("_TAREA"), PDO::PARAM_STR);
  return $query->execute();
  $respuesta = $query->fetchAll();

      /* se envia la respuesta de la base de datos al controlador
      principal.php */

      return $respuesta;

    }


public function editarDone(){


  $sql="call SP_EditarDone (?,?)";

  $query = $this->db->prepare($sql);
      // id autoincrementable y tambien opcional de ingreso
  $query->bindValue('1', $this->__GET("_ID"), PDO::PARAM_INT);
  $query->bindValue('2', $this->__GET("_TAREA"), PDO::PARAM_STR);
  return $query->execute();
  $respuesta = $query->fetchAll();

      /* se envia la respuesta de la base de datos al controlador
      principal.php */

      return $respuesta;

    }


// Registrar tarea Doing

    public function registrarDoing(){


              // $sql="call SP_RegistrarDoing (?)";
      $sql="call SP_RegistrarDoing (?,?)";

      $query = $this->db->prepare($sql);

      $query->bindValue('1', $this->__GET("_ID"), PDO::PARAM_INT);
      $query->bindValue('2', $this->__GET("_TAREA"), PDO::PARAM_STR);
      $query->execute();
      $respuesta = $query->fetchAll();

              /* se envia la respuesta de la base de datos al controlador
              principal.php */

              return $respuesta;

            }

            public function registrarDone(){


              // $sql="call SP_RegistrarDone (?)";
              $sql="call SP_RegistrarDone (?,?)";

              $query = $this->db->prepare($sql);

              $query->bindValue('1', $this->__GET("_ID"), PDO::PARAM_INT);
              $query->bindValue('2', $this->__GET("_TAREA"), PDO::PARAM_STR);
              $query->execute();
              $respuesta = $query->fetchAll();

              /* se envia la respuesta de la base de datos al controlador
              principal.php */

              return $respuesta;

            }

// Hansei
            public function registrarHansei(){


              // $sql="call SP_RegistrarHansei (?)";
              $sql="call SP_RegistrarHansei (?,?)";

              $query = $this->db->prepare($sql);

              $query->bindValue('1', $this->__GET("_ID"), PDO::PARAM_INT);
              $query->bindValue('2', $this->__GET("_TAREA"), PDO::PARAM_STR);
              $query->execute();
              $respuesta = $query->fetchAll();

              /* se envia la respuesta de la base de datos al controlador
              principal.php */

              return $respuesta;

            }


// Eliminar tarea to do

            public function eliminarToDo(){


              $sql="call SP_EliminarToDo (?)";

              $query = $this->db->prepare($sql);
              $query->bindValue('1', $this->__GET("_ID"), PDO::PARAM_INT);
              return $query->execute();


            }


// Eliminar tarea doing

            public function eliminarDoing(){


              $sql="call SP_EliminarDoing (?)";

              $query = $this->db->prepare($sql);
              $query->bindValue('1', $this->__GET("_ID"), PDO::PARAM_INT);
              return $query->execute();


            }

// Eliminar tarea done

            public function eliminarDone(){


              $sql="call SP_EliminarDone (?)";

              $query = $this->db->prepare($sql);
              $query->bindValue('1', $this->__GET("_ID"), PDO::PARAM_INT);
              return $query->execute();


            }


// Eliminar tarea Hansei

            public function eliminarHansei(){


              $sql="call SP_EliminarHansei (?)";

              $query = $this->db->prepare($sql);
              $query->bindValue('1', $this->__GET("_ID"), PDO::PARAM_INT);
              return $query->execute();


            }


            public function listarToDo(){

              $sql="SELECT * FROM TblTo_Do";
              $query = $this->db->prepare($sql);
              $query->execute();
              $respuesta = $query->fetchAll();

              return $respuesta;

            }

            public function listarDoing(){

              $sql="SELECT * FROM TblDoing";
              $query = $this->db->prepare($sql);
              $query->execute();
              $respuesta = $query->fetchAll();

              return $respuesta;

            }


            public function listarDone(){

              $sql="SELECT * FROM TblDone";
              $query = $this->db->prepare($sql);
              $query->execute();
              $respuesta = $query->fetchAll();

              return $respuesta;

            }


            public function listarHansei(){

              $sql="SELECT * FROM TblHansei";
              $query = $this->db->prepare($sql);
              $query->execute();
              $respuesta = $query->fetchAll();

              return $respuesta;

            }


      // Listar propositos

      // tipo interno = 1, externo = 2

            public function listarPropositosInternos(){

              $sql="SELECT * FROM TblPropositos WHERE tipo = 1";
              $query = $this->db->prepare($sql);
              $query->execute();
              $respuesta = $query->fetchAll();

              return $respuesta;

            }

            public function listarPropositosExternos(){

              $sql="SELECT * FROM TblPropositos WHERE tipo = 2";
              $query = $this->db->prepare($sql);
              $query->execute();
              $respuesta = $query->fetchAll();

              return $respuesta;

            }

            public function listarGlosario(){
              try {
                $sql="SELECT * from TblGlosario";
                $query = $this->db->prepare($sql);
                $query->execute();
                return $query->fetchAll();
              } catch (Exception $e) {
                $mensaje = $e;
                return $mensaje;
              }

            }

          }
