<?php

//conexion
require '../php/conexion.php';
$salida = "";


$consulta = " SELECT  * FROM  datos ORDER BY codigo DESC LIMIT 6 ";
$resultado = mysqli_query($con,$consulta);

if (isset($_POST['consulta'])) {
    $q = ($_POST['consulta']);
    $consulta = "SELECT * FROM datos WHERE pregunta LIKE '%$q%' ";
}
$resultado = $con->query($consulta);

if ($resultado->num_rows>0) {

while( $row = $resultado->fetch_array()){
$cdo = $row[0];
    $salida.="
    <div class='col-sm-4 '>
        <div class='card'>
            <div class='image'><img src='/pasantia/css/img/res.jpg' /></div>
            <div class='card-inner'>
            <div class='header h'><p >$row[1]</p></div>
            <div class='header'><p> <button class=' pt btn col-md-12  border-primary bg-info text-white' onclick='ver_respuesta(this.id);'id='$cdo;'data-toggle='modal' data-target='#ventana_modal' >Respuesta</button> </p></div>
            </div>
        </div>
        </div> <br>
";
}
}else{
    $salida.="
    <label class='alert alert-danger col-md-12 shadow-sm p-3 mb-5 rounded animar '>
        <p class=''> Lo sentimos el registro buscado no se encuentra en la base de datos, deja tu pregunta en nuestro chat, encontraras la respectiva respuesta en 2 dias.</p>
    </label>
    ";
}
echo$salida;
mysqli_close($con);


?>


