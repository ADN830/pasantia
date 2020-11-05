<?php

require '../php/conexion.php';

$id=$_POST['cdo'];

$sql = " SELECT * FROM datos WHERE codigo = $id";
$resul_sql = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($resul_sql);

echo json_encode($row);

mysqli_close($con);
?>