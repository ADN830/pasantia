<?php

require '../php/conexion.php';

$salida = "";

$consulta = "SELECT * FROM abandono  ORDER BY fecha  DESC LIMIT 9";
$resultado = mysqli_query($con, $consulta);

if (isset($_POST['consulta'])) {
  $q = ($_POST['consulta']);
  $consulta = "SELECT * FROM abandono WHERE placa LIKE '%$q%' OR propietario LIKE '%$q%' OR documento LIKE '$q' ";
}
$resultado = $con->query($consulta);


if ($resultado->num_rows>0) {

  while ($row = $resultado->fetch_array()) {
  $nombre = utf8_encode($row[2]);
  $placa = utf8_encode($row[1]);

    $salida.="
    <br><br>
        <div class='col-md-4 col-lx-12 p-3'> <br>
      <div class='card tg'>
        <div class='card-header font-weight  ta'> <label> Nombre del propietario <br>$nombre</label> </div>
        <div class='card-header ta'>Numero de documento <br>$row[3]</div>
        <div class='card-footer ta'>Placa del vehiculo <br> $placa</div>
        <div class='card-footer ta'>Fecha de abandono <br> $row[4]</div>
        <div class='card-footer ta'<button class='cli' id='$row[codigo]'onclick='eliminar_registro(this.id)'>Eliminar</button></div>
      </div>
    </div>
    ";
  }
}else{
  $salida.="
  <labe class='alert alert-danger col-md-12  text-center shadow-sm p-3 mb-5 rounded'>
      Lo sentimos el registro buscado no se encuentra en la base de datos! <br>
</label>
";
}
echo$salida;
?>