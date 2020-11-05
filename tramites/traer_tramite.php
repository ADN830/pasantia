<?php
require '../php/conexion.php';

$salida ="";

$consulta = "SELECT * FROM datos  LIMIT 8 ";
$resultado = mysqli_query($con ,$consulta);

if (isset($_POST['consulta'])) {
    $q = ($_POST['consulta']);
    $consulta = "SELECT * FROM datos WHERE pregunta LIKE '%$q%' ";
}
    $resultado = $con->query($consulta);

    if ($resultado->num_rows>0) {
        while($row = $resultado->fetch_array()){
            $salida.="<div class='list-group col-md-12'> <button id='$row[0]' onclick='ver_valor(this.id);' type='button' class='list-group-item list-group-item-action lis'>$row[1]</button></div>";
        }
    }else{
        echo"<br> <label class='col-md-12  text-center alert alert-danger shadow-sm p-3 mb-5 rounded'> No se encontraron resultados !</label>";
    }
    echo$salida;
    mysqli_close($con);


?>