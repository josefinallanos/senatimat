<!doctype html>
<html lang="es">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

</head>

<body>

<div class="container mt-4 text-center">
  <button class="btn btn-outline-primary" id="" data-bs-toggle="modal" data-bs-target="#modalId"><strong><i class="bi bi-plus-circle"></i> Registrar Estudiantes</strong></button>
</div>


<div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-light">
        <h5 class="modal-title" id="modalTitleId">Registro de cursos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formulario-estudiantes" autocomplete="off" action="">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">Apellidos</label>
              <input type="text" class="form-control form-control-sm" id="apellidos">
            </div>
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">Nombres</label>
              <input type="text" class="form-control form-control-sm" id="precio">
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">Tipo Documento</label>
              <select  id="tipoDoc" class="form-select" >
                <option value="">Seleccione</option>
                <option value="D">DNI</option>
                <option value="C">Carnet Ext.</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">N° Documento</label>
              <input type="text" class="form-control form-control-sm" id="numDoc">
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">Fecha</label>
              <input type="date" class="form-control form-control-sm" id="fecha">
            </div>
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">Sede</label>
              <select  id="sede" class="form-select">
                <option value="">Seleccione</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">Escuela</label>
              <select  id="escuela" class="form-select">
                <option value="">Seleccione</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">Carreras</label>
              <select  id="carreras" class="form-select" >
                <option value="">Seleccione</option>
              </select>
            </div>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Fotografia</label>
            <input type="file" class="form-control form-control-sm" id="fotografia">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-primary btn-sm" id="guardarCursos">Guardar</button>
      </div>
    </div>
  </div>
</div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>  
<!-- Swett alert-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
 
  success: function(result){
     $(document).ready(function (){

  function obtenerSedes(){
    $.ajax({
      url   : '../controllers/sede.controller.php',
      type  : 'POST',
      data  : {operation: 'listarSedes'},
      dataType  : 'text',
        $("#sede").html(result);
      } 
    });
  }

  function obtenerEscuelas(){
    $.ajax({
      url   : '../controllers/escuela.controller.php',
      type  : 'POST',
      data  : {operation: 'listarEscuela'},
      dataType  : 'text',
      success: function(result){
        $("#escuela").html(result);
      } 
    });
  }

  function registrarEstudiante(){
    Swal.fire({
      icon: 'question',
      titt
    }

    )

  }


  $("#escuela").change(function (){
    const idescuelaFiltro = $(this).val();
    $.ajax({
      url   : '../controllers/carrera.controller.php',
      type  : 'POST',
      data  : {
        operation: 'listarCarrera',
        idescuela :idescuelaFiltro
      },
      dataType  : 'text',
      success: function(result){
        $("#carreras").html(result);
      } 
    });
  });

  //Evento apertura del modal
  $("#modalId").on("shown.bs.modal", event => {
    $("#apellidos").focus();
  });

  obtenerSedes();
  obtenerEscuelas();
  });

</script>


</body>

</html>