<?php 

//incluir conexion
require '../php/conexion.php';

$salida ="";

//traer datos  y mostrarlos en una tabla
$consulta = " SELECT * FROM datos ORDER BY codigo DESC ";
$result = mysqli_query($con,$consulta);

if (isset($_POST['consulta'])) {
  $q = ($_POST['consulta']);
  $consulta = "SELECT * FROM datos WHERE pregunta LIKE '%$q%' ";
}
$result = $con->query($consulta);

if ($result->num_rows > 0 ){


 while ($row = mysqli_fetch_array($result)) {

$salida.="
<div class='card text-left shadow bg-light rounded'>
  <div class='card-header' style='background:#C1DBF8'>$row[1]</div>
  <div class='card-body'><p class='card-text'>$row[2]</p></div>
  <div class='card-footer text-muted bg-light'>
  <button class='btn btn-danger text-white bot' id='$row[0]' onclick='eliminar_dto(this.id)'> ELIMINAR PREGUNTA </button>
  <button class='btn btn-warning text-white bot' id='$row[0]' onclick='actualizar(this.id)' data-toggle='modal' data-target='#exampleModal'>EDITAR PREGUNTA </button>
  </div>
</div><br>
";
 } 
}else{
 $salida.="<br> <label  class='col-md-12 font-weight-bold  text-center alert alert-info text-danger shadow-sm p-3 mb-5 rounded'> No se encontraron resultados !</label>
 ";
}
echo$salida;
mysqli_close($con);

?> 