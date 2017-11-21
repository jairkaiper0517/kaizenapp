<?php

class ModeloLogin
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

  // Iniciar Sesion

          public function iniciarSesion(){

            $sql = "SELECT * FROM TblUsuarios WHERE correo = :correo";
            $query = $this->db->prepare($sql);
            $query->bindValue(':correo', $this->__GET("_CORREO"), PDO::PARAM_INT);
            $query->execute();
            $respuesta = $query->fetch();
            return $respuesta;
          }

        }
