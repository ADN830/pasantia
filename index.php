<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-CO">
<html>
<head>
	<title>prueba git</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="css/img/logo.ico">
    <!-- estilos de bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- icons de bootstrap-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- fuente  -->
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <!-- css propios -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <!-- animete css-->
    <link rel="stylesheet" type="text/css" href="css/animate/animate.css">
    <!--normalize -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!-- funete--------->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <!--icno de la barra-->
    <link rel="stylesheet" type="text/css" href="css/font.css">

    <!-- bootstrap local-->
    <script src="/preguntas/js/jquery/jquery.js"></script>
    <link rel="stylesheet" href="/preguntas/css/bootstrap/css/bootstrap.css">

    <!--js de boostrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- alerta de bienvenida-->
    <script src="js/busqueda.js"></script>
    <!-- hoja de estilos  js propios-->
    <script src="js/script.js"></script>
    <!-- llamara  a la libreria sweetaler-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>


<body>
  <script src="css/animate/wow.js"></script>
  <script>new WOW().init();</script>
<!--------------------------------------------- nav ----------------------------------------------------------->
<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#" > <img src="css/img/logo (1).png"  height="auto" class=" wow zoomInDown d-inline-block align-top col-12" alt=""></a>

  <div class="collapse navbar-collapse pro" id="navbarTogglerDemo03">
      <input type="text" class="form-control col-md-10 col-sm-12 mx-auto" title="Buscra por tu pregunta" name="caja_busqueda" id="caja_busqueda"  placeholder="Buscar...">
  </div>
</nav>

<br><br>

<div class="container">
  <div class="form-group col-md-12 row justify-content-center pruebasanimacion ">
    <a href="https://api.whatsapp.com/send?phone=573227391273&text=Hola!%20quisiera%20liquidar%20un%20comparendo." class="btn btn-primary col-md-4 col-xs-12 shadow rounded form-control" type="button"target="_blank">Liquidar Comparendos</a> 
    <a href="/preguntas/php/tramites" class="btn btn-success col-md-4 col-xs-12 shadow rounded form-control" type="button"target="_blank">Consultar Tramites</a> 
  </div>
  <br>
  <!-- traer preguntas en forma de tarjetas-->
  <div class="row  " id="List" ></div>

</div> <!--fin del container-->



<!-----------------VENTAN MODAL PARA VISUALIAR LAS RESPUESTAS---------------------------------------------->
<div class="modal fade bg-info text-white" id="ventana_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg " role="document">
    <div class="modal-content shadow-lg p-3 mb-5 bg-dark  rounded pl" id="modal">
      <div class="modal-header p-0 m-0 bg-dark"> 
        <h5 class="modal-title " id="exampleModalLongTitle"><p id="texto-pregunta" ></p></h5>
      </div>
      <div class="modal-body">
      <p id="texto-respuesta" ></p>
      </div>
      <div class="modal-footer p-0 m-0">
        <button type="button" class="btn btn-danger  sali " id="salir" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<!-----------------------------------seccion de chat y redes sociales ---------------------------------------------->
  <div class="social-bar">
  <a href="php/login.php" class="icon icon-glassdoor" target="_blank"></a>
  <a href="https://www.facebook.com/Tr%C3%A1nsito-y-Transporte-De-Barrancabermeja-191312521242157/?ref=bookmarks" class="icon icon-facebook" target="_blank"></a>
  <a href="https://www.messenger.com/t/TransitoBCA" class="icon icon-messenger" target="_blank"></a>
</div>
<br><br><br>

<footer class="page-footer font-small teal px-0 pt-4 col-12">
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
<!-------------------------------- chat de respaldo purechat----------------------------------------------->
<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '7faed14c-62ca-4919-8f4b-2f2524dacb27', f: true }); done = true; } }; })();</script> 



<script>

Swal.fire({
  title: 'Bienvenido',
  html:'<p class="text-justify">La inspección de tránsito y transporte de Barrancabermeja, en la busqueda de brindar un mejor servicio y garantizar la accesibilidad a la información a sus usuarios habilita la plataforma de preguntas frecuentes donde podrá buscar la pregunta que necesitas, si la pregunta no esta registrada  puedes enviar tu pregunta para que sea  contestada y agregada al listado. </p>',
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
</script>



</body>
</html>
