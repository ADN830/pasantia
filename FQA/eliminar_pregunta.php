<?php
   //incluir conexion
 require '../php/conexion';

  if (isset($_POST['traer'])) {

    $codigo = $_POST['traer'];
    $consulta = "DELETE FROM  datos WHERE codigo = $codigo";
    $sql = mysqli_query($con,$consulta);
  }
    mysqli_close($con);

?>