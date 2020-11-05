<?php
require '../php/conexion.php';
session_start();
$var1 =  $_SESSION['clave'];
if($var1== NULL || $var1 = ''){
  header('location:/pasantia/php/destruir_sesion.php');
  die();
}
$consulta = "SELECT * FROM abandono ";
$resultado = mysqli_query($con, $consulta);
$registros = mysqli_num_rows($resultado);

$sql= "SELECT * FROM datos ";
$ejecutar = mysqli_query($con, $sql);
$total = mysqli_num_rows($ejecutar);

$diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
?>
<!DOCTYPE html>
<html lang="es Co">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="icon" href="../css/img/logo.ico">

<!--js de boostrap-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<!-- estilos de bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- icons de bootstrap-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<!-- css propios -->
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<!--iconos de iconmon--->
<link rel="stylesheet" href="../css/img/style.css">
<!-- animete css-->
<link rel="stylesheet" type="text/css" href="../css/animate/animate.css">
<!--normalize -->
<link rel="stylesheet" type="text/css" href="../css/normalize.css">
<!--ckeeditor-->
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>


<header class="">
		<div class="menu_bar">
    <a href="#" class="bt-menu"><span class="icon-list" style="font-size:27px;"></span>Menu</a>
		</div>

		<nav>
			<ul>
				<li><a id="inicio" href="#">INICIO</a></li>
				<li><a id="generar_user" href="#">CREAR USUARIO</a></li>
				<li><a id="generar_pregunta" href="#">AGREGAR PREGUNTA</a></li>
				<li><a id="editar" href="#">EDITAR Y ELIMINAR </a></li>
        <li><a id="lista_tramite" href="#">LISTA DE TRAMITES</a></li>
        <li><a id="ver_datos" href="#">VEHICULOS ABANDONADOS</a></li>
        <li><a id="salir" href="../php/destruir_sesion.php">CERRAR SESION</a></li>
			</ul>
		</nav>
	</header>
</head>
<br><br><br><br><br>
<body style="background-color:#BCE9FB ;">
<script src="../css/animate/wow.js"></script>
  <script>new WOW().init();</script>



<div class="container " id="general">
  <div class="row">
    <div class=" col-xs-12 col-sm-12 col-md-12">


<!--------------------------secion de binevenida al panel administrativo-------------------------------------->

    <section id="seccion_cero" class="border border-info">
      <div class="alert bg-success h5 text-center" style=" color: white; text-shadow: 2px 2px 4px #000000;">Bienvenido a la paltaforma Administrativa </div>
      <p class="p-3 text-white" style="font-size:16px;"> <strong> plataforma Loren Loren </strong> Es la encargada de manejar la página preguntas frecuentes, página de trámites y la gestión de los vehículos en estado de abandono en la ciudad de Barrancabermeja. </p>
      <p class="p-3 text-white" style="font-size:16px;"> <strong> Crear Usuario</strong> Nos permite dar acceso a la plataforma Loren Loren por medio de un usuario y una contraseña generada, asignándole un nivel de administrativo o operativo.  </p>
      <p class="p-3 text-white"> <strong>Agregar Pruguntas</strong> La página de preguntas frecuentes es alimentada por medio de esta plataforma Loren Loren, podemos agregar nuevas preguntas con sus respectivas respuestas. </p>
      <p class="p-3 text-white"><strong>1</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ea minus accusantium perferendis porro, delectus quod voluptatibus nemo optio velit recusandae iste placeat exercitationem ducimus earum tempore animi totam. Quibusdam. </p>
      <p class="p-3 text-white"> <strong>Vehículos en Abandono</strong> Podemos encontrar la lista total de vehículos reportados como abandonados en los parqueaderos de la inspección de tránsito, este listado tiene corte hasta el año 2018 </p>
        <div class="alert  text-center text-white"><?php echo $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;?></div>
    </section>

<!--------------------------------------seccion de  vehiculos en estado de abandono------------------------------------->

<section id="seccion_abandono">
<div class="container">
<div class=" col-md-12 col-xs-12" >
<?php echo "<label class='alert font-weight-bold h5 col-md-12 col-sm-12  text-white text-center'> Este listado tiene corte hasta el año 2018 cuenta con un total de $registros registro </label>"?>
<input type="text" class="form-control col-md-12 col-sm-12 " title="Buscra por Documeto,placa o nombre" name="caja_abandono" id="caja_abandono"  placeholder="Buscar...">
<div class="row" id="tabla_datos"></div>
</div>
</div>
</section>

<!--------------------------------------------seccion para la creacion de usuarios--------------------------------------->

<section id="seccion_user">

<button type="button" class="btn btn-success text-white" data-toggle="modal" data-target="#crear_nuevo" style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); text-shadow: 2px 2px 4px #000000 ">Agregar Nuevo Usuario</button>
<label class='alert bg-info  col-md-12 text-center h4' style='color: white;text-shadow: 2px 2px 4px #000000;'> lista de usuarios </label>
<div class="table-responsive p-4" id="lista_user" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></div>

<!-- --------------------------------------------Modal para agregar un nuevo usuario--------------------- -->
<div class="modal fade" id="crear_nuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de usuarios</h5>
      </div>
      <div class="modal-body">

      <form method="post" id="formulario_user" class="col-md-12">
          <div class="form-group">
            <label for="exampleInputEmail1">NOMBRE</label>
            <input type="email" class="form-control" id="nombre_usuario" name="nombre_usuario">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">USUARIO</label>
            <input type="text" class="form-control" id="nick_usuario" name="nick_usuario">
          </div>

          <div class="form-group">
            <label for="">NIVEL DE USUARIO</label>
                <select name="nivel_usuario" id="nive_usuario" class="form-control" required >
                  <option></option>
                  <option value="1">ADMINISTRATIVO</option>
                  <option value="2">OPERATIVO</option>
                </select>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">CONTRASEÑA</label>
            <input type="text" class="form-control" id="clave_usuario" name="clave_usuario">
          </div>

          <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" id="enviar_user" name="enviar_user" class="btn btn-primary">Agregar</button>
            </div>
          <div id="validar_user"></div>
        </form>
      </div>
    </div>
  </div>
</div>


</section>

<!------------------------------------------inicio de formualario para agregar preguntas---------------------------------->
      <form action="" method="POST" id="todo">
      <div id="formulario_uno" class="p-2"  >
        <legend class="font-weight-bold text-light text-center">Generar Preguntas y Respuestas</legend>
          <div class="form-group">
            <input name="pregunta" id="pregunta" class=" form-control" type="text" placeholder="Pregunta" required>
          </div>
          <div class="form-group">
            <textarea name="respuesta" id="respuesta" class="form-control" rows="10" placeholder="respuesta" required></textarea>
          </div>
          <div class="form-group">
            <input type="button" name="enviar" id="enviar" class="btn btn-success " value="Guardar" name="guardar">
            <input type="reset" class="btn btn-danger " value="Restableces">
          </div>
      </div>
      <div id="validar_preguntas"></div>
    </form><!--fin de formulario-->

    <!-------------------------------------formulario editar preguntas------------------------->

  <div class='modal fade' id='exampleModal' tabindex='-1'role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Editar preguntas</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <form action='' id="ed_formulario" method='POST' >
        <input type='hidden' name='id' id="id" value=''>

        <div class='form-group'>
            <input name='ed_pregunta' id='ed_pregunta' class='form-control' type='text' placeholder='Pregunta'required>
          </div>
          <div class='form-group'>
              <textarea class='form-control text-dark' class='form-control' id="ed_respuesta" name="ed_respuesta" placeholder='respuesta' rows="15"  required ></textarea>
          </div>

          <div class='modal-footer'>
          <button type='reset' class='btn btn-danger' data-dismiss='modal'>CERRAR</button>
          <button type='button' id="ed_enviar" name="ed_enviar" class='btn btn-primary'>ACTUALIZAR</button>
        </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

<!---------------seccion para visualizar las preguntas y respuestas almacenadas en la base de datos------------------------>

<div id="formulario_dos"  >
<div class="col-xs-12 col-sm-12 col-md-12 cabeza">
      <legend class='alert font-weight-bold h5 col-md-12 col-sm-12  text-white text-center'><label>Editar y eliminar registros de la  preguntas</label></legend>
        <input class="form-control" type="text" placeholder="Buscar..." id="buscar"><br>
      </div>
      <div id="tabla_eliminar" class="p-4"></div>
  </div>

</div>
</div>
</div> <!--fin del container-->

<!-- llamara  a la libreria sweetaler-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- estilos js propiosr-->
<script src="../js/script.js"></script>
<!-- buscador con js-->
<script src="../js/busqueda.js"></script>
<!--libreria para editar texto
<script>CKEDITOR.replace( 'respuesta' );</script>
<script>CKEDITOR.replace( 'ed_respuesta' );</script> -->


</body>
</html>