<?php

require '../php/conexion.php';

if (isset($_POST['pregunta'])) {

  $preguunta = $_POST['pregunta'];
  $respuesta = $_POST['respuesta'];

  if (empty($preguunta)) {
    echo "
    <div class='alert alert-danger text-left alert-dismissible fade show' role='alert'>
    El campo pregunta esta vacio
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>";
    return false;
  }elseif(empty($respuesta)){
    echo "
    <div class='alert alert-danger text-left alert-dismissible fade show' role='alert'>
    El campo respuesta esta vacio.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>";
    return false;
  }else {
    $consulta = mysqli_prepare($con,"INSERT INTO datos (pregunta,respuesta) VALUES (?,?)");
	  mysqli_stmt_bind_param($consulta,"ss",$preguunta,$respuesta);
	  mysqli_stmt_execute($consulta);
    mysqli_stmt_close($consulta);
    echo "
    <div class='alert alert-danger text-left alert-dismissible fade show' role='alert'>
    Datos Agregados
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>";

  }

}

mysqli_close($con);
?>