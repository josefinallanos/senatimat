<?php

require_once '../models/Carrera.php';

if (isset($_POST['operation'])){
  $carrera = new Carrera();

  if($_POST['operation'] == 'listarCarrera'){
    $data = $carrera->listarCarrera($_POST['idescuela']);
    
    //Enviar los datos a la vista
    //Si contiene informacion, si no esta vacio
    if ($data){
      echo "<option value='' selected>Seleccione</option>";
      foreach($data as $registro){
        echo "<option value='{$registro['idcarrera']}'>{$registro['carrera']}</option>";
      }
    }else{
      echo "<option value=''>No encontramos datos</option>";
    }
  
  }


}


?>