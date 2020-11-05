
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso plataforma de preguntas </title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../css/img/logo.ico">

    <!--js de boostrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--Iconos de fontawesome-->
    <script src="https://kit.fontawesome.com/6744e627d0.js" crossorigin="anonymous"></script>
    <!-- estilos de bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- icons de bootstrap-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- css propios -->
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <!-- animete css-->
    <link rel="stylesheet" type="text/css" href="../css/animate/animate.css">
    <!--normalize -->
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">


  <!-- hoja de estilos  js propios-->
  <script src="../js/script.js"></script>
</head>
<body style="background-color:#BCE9FB ;">
<nav class="navbar navbar-expand-lg navbar-light sticky-top col-md-12" id="nav">
	<a class="navbar-brand" href="#" > <img src="../css/img/logo (1).png"  height="auto" class=" wow zoomInDown d-inline-block align-top col-12" alt=""></a>
</nav>
<br><br><br><br><br><br>


<div class="container ">
<div class="row justify-content-center">
	<div class=" todo col-md-6 col-sm-12 shadow  p-3 mb-5 bg-white rounded ">

            <label class="alert col-md-12  text-center text-dark h3"> Formulario de Ingreso</label>
            <form action="" id="formulario_ingreso" method="POST" id="formulario" class="col-md-12" >

            <div class="form-group">
              <label class="text-dark" for=""> Usauario</label>
              <input class="form-control col-md-12 col-sm-12 shadow-sm  bg-white rounded" type="text" name="usuario" id="usuario" autocomplete="off">
            </div>

            <div class="form-group">
              <label class="text-dark" for="">Contraseña</label>
              <i class=""></i>
              <input class="form-control col-md-12 col-sm-12 shadow-sm  bg-white rounded" type="password" name="contrasena" id="contrasena" autocomplete="off">
            </div> <br>

            <div class="form-group">
              <input type="button" class="btn btn-info form-control" value="Ingresar" id="sesion" name="salio"> <br>
            </div>
            <div id ="validar_user" ></div>
            <div id ="validar_clave" ></div>
            <div id ="validar_php"> </div>
          </form>



</div>
</div>
</div>
</body>
</html>
