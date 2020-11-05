<?php
  session_start();
 require 'conexion.php';
  // Obtengo los datos cargados en el formulario de login.
  $usuario = $_POST['usuario'];
  $clave = $_POST['contrasena'];

if (empty($usuario)){
  echo "
    <div class='alert alert-danger text-center alert-dismissible fade show' role='alert'>
    <strong>Lo sentimos! El campo usuario esta vacio.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>";
    return false;
}
if(empty($clave)){
  echo "
    <div class='alert alert-danger text-center alert-dismissible fade show' role='alert'>
    <strong>Lo sentimos! El campo contraseña esta vacio.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>";
    return false;
}
  $consulta = mysqli_prepare($con,"SELECT * FROM ingreso WHERE usuario = ? AND clave = ? " );
  mysqli_stmt_bind_param($consulta, "ss",$usuario,$clave);
  mysqli_stmt_execute($consulta);
  $result = mysqli_stmt_get_result($consulta);
  mysqli_stmt_close($consulta);


  if(mysqli_num_rows($result)>0){
    // Guardo en la sesión del usuario.
    $_SESSION['clave'] = $clave;
    echo 1;

  }else{
    echo "
    <div class='alert alert-danger text-center alert-dismissible fade show' role='alert'>
    <strong>Lo sentimos! sus datos son incorrectos.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>";
    return false;
  }

mysqli_close($con);

?>
