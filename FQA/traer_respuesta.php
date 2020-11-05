<?php 

//conexion
require '../php/conexion.php';

if (isset($_POST['cod'])) {
    $codig=$_POST['cod'];

    // trer por  consulta el codigo y respuestas
    $sql_consulta =  sprintf("SELECT * FROM datos WHERE codigo = '%s'",$codig);
    $sql_resultado = mysqli_query($con,$sql_consulta);
    $row = $sql_resultado -> fetch_array(MYSQLI_ASSOC);
    //traer todas los codigo & respuestas
    echo json_encode(array($row['pregunta'],$row['respuesta']));
};
mysqli_close($con);
?>