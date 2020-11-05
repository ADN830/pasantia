<?php

require 'conexion.php';

if (isset($_POST['nombre_usuario'])) {

    $nombre = $_POST['nombre_usuario'];
    $usuario = $_POST['nick_usuario'];
    $nivel = $_POST['nivel_usuario'];
    $clave = sha1($_POST['clave_usuario']);

    if (empty($nombre)) {
        echo "
        <div class='alert alert-danger text-left alert-dismissible fade show' role='alert'>
        El campo nombre esta vacio
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
        return false;
    }elseif(empty($usuario)){
        echo "
        <div class='alert alert-danger text-left alert-dismissible fade show' role='alert'>
        El campo usuario esta vacio
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
        return false;
    }elseif(empty($nivel)){
        echo "
        <div class='alert alert-danger text-left alert-dismissible fade show' role='alert'>
        El campo nivel esta vacio
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
        return false;
    }elseif(empty($clave)){
        echo "
        <div class='alert alert-danger text-left alert-dismissible fade show' role='alert'>
        El campo clave esta vacio
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
        return false;
    }else {
        $consulta = mysqli_prepare($con,"INSERT INTO ingreso (nombre,usuario,nivel,clave) VALUES (?,?,?,?)");
        mysqli_stmt_bind_param($consulta,"ssss",$nombre,$usuario,$nivel,$clave);
        mysqli_stmt_execute($consulta);
        mysqli_stmt_close($consulta);
        echo "
        <div class='alert alert-success text-left alert-dismissible fade show' role='alert'>
        Usuario registrado de manera exitosa.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
    }

}

mysqli_close($con);



?>