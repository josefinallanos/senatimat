<?php
  
  require_once 'Conexion.php';

  class Carrera extends Conexion{
    private $accesoDB;

    public function __CONSTRUCT(){
      $this->accesoDB = parent::getConexion();
    }

    public function listarCarrera($idescuela = 0){
      try{
        $consulta = $this->accesoDB->prepare("CALL spu_carrera_listar(?)");
        $consulta->execute(array($idescuela));
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
      }
      catch(Exception $e){
        die($e->getMessage());
      }
    }

  }

?>