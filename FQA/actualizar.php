<?php

require '../php/conexion';

$id=$_POST['id'];
$pregunta= $_POST['ed_pregunta'];
$respuesta = $_POST['ed_respuesta'];

$sql ="UPDATE datos SET pregunta='$pregunta',respuesta='$respuesta'WHERE '$id' = codigo";

$enviar= mysqli_query($con,$sql);

if ($enviar){
  echo"Datos actualizados de manera correcta";
}else{
  echo"Datos no actualizados";
}




?>