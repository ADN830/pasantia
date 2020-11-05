<!DOCTYPE html>
<html style="font-size: 15px;" lang="es-CO">
<html>
<head>
	<title>Tramites</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="/preguntas/css/img/logo.ico">
    <!-- estilos de bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- icons de bootstrap-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- fuente  -->
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <!-- css propios -->
    <link rel="stylesheet" type="text/css" href="/preguntas/css/tramites.css">
    <!-- animete css-->
    <link rel="stylesheet" type="text/css" href="/preguntas/css/animate/animate.css">
    <!--normalize -->
    <link rel="stylesheet" type="text/css" href="/preguntas/css/normalize.css">
    <!-- funete--------->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <!--icno de la barra-->
    <link rel="stylesheet" type="text/css" href="/preguntas/css/font.css">

    <!--js de boostrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <!-- bootstrap local-->
    <script src="/preguntas/js/jquery/jquery.js"></script>
    <link rel="stylesheet" href="/preguntas/css/bootstrap/css/bootstrap.css">

    <!-- buscador-->
    <script src="/preguntas/js/busqueda.js"></script>
    <!-- traer las preguntas-->
    <script src="/preguntas/js/script.js"></script>
    <!-- llamara  a la libreria sweetaler-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    
</head>

<body>
  <script src="/preguntas/css/animate/wow.js"></script>
  <script>new WOW().init();</script>
<!--------------------------------------------- nav ----------------------------------------------------------->
<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light col-md-12" id="nav">
  <a class="navbar-brand" href="#" > <img src="/centralizar/img/logo.png"  height="auto" class=" wow zoomInDown d-inline-block align-top col-12" alt=""></a>
</nav>

<br><br><br><br><br><br>

<div class="container">
  <div class="row">
<br>
    <div class="col-md-6">

    <div class="col-md-12 col-sm-12 h-auto shadow p-3 mb-5 bg-white rounded border border-primary busc">
        <label class=" col-md-12 alert text-white  h4" style="background-color:#337ab7;">listado de tramites</label>
        <input class="form-control col-md-9" type="text" name="caja" id="caja"  placeholder="Buscador para tramites">
       <div id="tramites"></div>
    </div> 

    </div>

    <div class="col-md-6"> 
      <div class="col-md-12 col-sm-12 shadow p-3 mb-5 bg-white rounded border border-primary"> 
        <label class=" col-md-12 alert alert-primary " style="color: #337ab7;">Valor de tramite</label>
        <div id="valor" class="tb">
        <label class='alert  text-center col-md-12'>Seleccione un tramite para conocer su valor </label>
        </div>
      </div>
    </div>

        
   </div> <!--fin del row-->
  </div> <!--fin del container-->


<footer class="page-footer font-small teal px-0 pt-4 col-md-12">
  <div class="container container-fluid pb-4">
    <div class="row">

    <div class="col-md-6 mt-3">  
        <p class="mb-0"><strong>DIRECTOR</strong></p>
        <p>Gustavo Adolfo Angarita Cortés</p>
        <p class="mb-0"><strong>NOTIFICACIONES JUDICIALES</strong></p>
        <p><a href="mailto:notificacionesjudiciales@transitobarrancabermeja.gov.co"> Escribenos aquí</a></p>
        <p class="mb-0"><strong>PETICIONES, QUEJAS, RECLAMOS y SOLICITUDES</strong></p>
        <p><a href="mailto:pqrs@transitobarrancabermeja.gov.co">Escribenos aquí</a></p> 
      </div>  

      <div class="col-md-6 mt-3">

      <div><p class="mb-0"><strong>RECIBO DE CORRESPONDENCIA</strong></p><p>Carrera 2 No. 50 - 25  Barrancabermeja - Colombia.</p></div>
      <div><strong><p class="mb-0">TELEFONOS</p></strong> 
      <ul class="pl-4">
        <li>Cobro Coactivo: 6021866</li>
        <li>Almacén: 3002784555</li>
        <li>Guardia de transito: 6228685 – 3002787376 – 3508714628, Avantel: 14656*11</li>
      </ul>
      </div>
      </div>
    </div>
  </div>
  </div>
  <div class="footer-copyright text-center py-3 bg-dark text-white"> COPYRIGHT <?php echo date('Y'); ?> &nbsp;©  INSPECCIÓN DE TRÁNSITO Y TRANSPORTE DE BARRANCABERMEJA.
</footer>

<script>
/*
Swal.fire({
  title: 'Bienvenido',
  html:'
  <p class="text-justify">
  La inspección de tránsito y transporte de Barrancabermeja, 
  en la busqueda de brindar un mejor servicio y garantizar la accesibilidad a la información a sus usuarios
  habilita la plataforma de preguntas frecuentes donde podrá buscar la pregunta que necesitas, 
  si la pregunta no esta registrada  pueden enviar sus preguntas para que sean  contestadas y agregadas al listado. 
  </p>',
  width: 900,
  backdrop: `rgba(23, 32, 42,.5)`,
  timerProgressBar:true,
  allowOutsideClick:false,
  allowEscapeKey:false,
  allowEnterKey:false,
  showConfirmButton:true,
  confirmButtonColor: "#2C3E50 ",
  confirmButtonText: "Aceptar",

});
*/
</script>
</body>
</html>
