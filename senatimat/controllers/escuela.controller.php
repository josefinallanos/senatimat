<?php

require_once '../models/Escuela.php';

if (isset($_POST['operation'])){
  $escuela = new Escuela();

  if($_POST['operation'] == 'listarEscuela'){
    $data = $escuela->listarEscuela();
    
    //Enviar los datos a la vista
    //Si contiene informacion, si no esta vacio
    if ($data){
      echo "<option value='' selected>Seleccione</option>";
      foreach($data as $registro){
        echo "<option value='{$registro['idescuela']}'>{$registro['escuela']}</option>";
      }
    }else{
      echo "<option value=''>No encontramos datos</option>";
    }
  
  }


}


?>