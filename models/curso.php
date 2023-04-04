<?php

require_once "conexion.php";

//Modelo = contiene la lógica
//extends : Herencia (POO) en PHP  
class Curso extends Conexion{

  //Objeto que almacene la conexión que viene desde el padre (Conexión)
  //Y la compartira con todo los métodos (CRUD+)
  private $accesoBD;

  //Constructor
  public function __CONSTRUCT(){
    $this->accesoBD = parent::getConexion();
  }

  //Método listar cursos
  public function listarCursos(){
    try{
      //1. Preparamos la consulta
      $consulta = $this->accesoBD->prepare("CALL spu_cursos_listar()");
      //2. Ejecutamos la consulta
      $consulta->execute();
      //3. Devolvemos el resultado
      return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(Exceptio$e){
      die($e->getMessage());
    }
  }

  public function registrarCurso(){
      try{
  
      }
      catch(Exceptio$e){
        die($e->getMessage());
      }
  }

  public function eliminarCurso(){
      try{
  
      }
      catch(Exceptio$e){
        die($e->getMessage());
      }
  }
  
  public function actualizarCurso(){
      try{
  
      }
      catch(Exceptio$e){
        die($e->getMessage());
      }
  }

}

?>