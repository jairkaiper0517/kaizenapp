<?php

class ModeloAdministrador
{
    public function __GET($atributo){
        return $this->$atributo;
    }

//Recibe los valores que envia el controlador
    public function __SET($atributo, $valor){
        $this->$atributo = $valor;
    }

//Llama a la funcion para conectarse a la base de datos
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('No se pudo establecer la conexión a la base de datos.');
        }
    }

  // Listar Usuarios

    public function listarUsuarios(){
        try {
          $sql="SELECT u.id, u.nombre, u.correo, r.descripcion
                from TblUsuarios u, TblRol r where r.id = u.rol";
          $query = $this->db->prepare($sql);
          $query->execute();
          return $query->fetchAll();
          //fetchAll: Devuelve un array que contiene todas las filas del conjunto de resultados
        } catch (Exception $e) {
          $mensaje = $e;
        }

      }

    public function listarPublicaciones(){
      try {
        $sql="SELECT p.id, u.nombre, p.titulo, p.fecha
              from TblPublicaciones p, TblUsuarios u where u.id = p.autor";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
        //fetchAll: Devuelve un array que contiene todas las filas del conjunto de resultados
      } catch (Exception $e) {
        $mensaje = $e;
      }

    }


    }
