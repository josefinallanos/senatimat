<?php
  
  require_once 'Conexion.php';

  class Escuela extends Conexion{
    private $accesoDB;

    public function __CONSTRUCT(){
      $this->accesoDB = parent::getConexion();
    }

    public function listarEscuela(){
      try{
        $consulta = $this->accesoDB->prepare("CALL spu_escuela_listar()");
        $consulta->execute();
        return $consulta->fetchALL(PDO::FETCH_ASSOC);
      }
      catch(Exception $e){
        die($e->getMessage());
      }
    }

  }

?>