<?php
  
  require_once 'Conexion.php';

  class Sede extends Conexion{
    private $accesoDB;

    public function __CONSTRUCT(){
      $this->accesoDB = parent::getConexion();
    }

    public function listarSedes(){
      try{
        $consulta = $this->accesoDB->prepare("CALL spu_sedes_listar()");
        $consulta->execute();
        return $consulta->fetchALL(PDO::FETCH_ASSOC);
      }
      catch(Exception $e){
        die($e->getMessage());
      }
    }

  }

?>