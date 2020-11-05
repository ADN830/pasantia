<?php

require'conexion.php';

$codigo = $_POST['cdo'];

  //consulta los codigos de la tabla datos
$consulta = mysqli_prepare($con,"DELETE FROM  ingreso WHERE codigo = ?");
mysqli_stmt_bind_param($consulta, "s", $codigo);
mysqli_stmt_execute($consulta);
mysqli_stmt_close($consulta);

mysqli_close($con);

?>