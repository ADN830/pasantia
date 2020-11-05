<?php

require 'conexion.php';


$sql =  " SELECT * FROM ingreso ORDER BY codigo ASC";
$ejecutar = mysqli_query($con,$sql);

if(mysqli_num_rows($ejecutar) > 0 ){
    echo"

<table class='table  table-sm table-bordered table-hover text-center '>
<thead class='thead-dark '>
    <tr>
    <th style='white-space: nowrap; width: 1px;'>NOMBRE</th>
    <th style='white-space: nowrap; width: 1px;'>USUARIO</th>
    <th style='white-space: nowrap; width: 1px;'>PRIVILEGIO</th>
    <th style='white-space: nowrap; width: 1px;'>CLAVE</th>
    <th style='white-space: nowrap; width: 1px;'>ELIMINAR</th>
    </tr>
</thead>
<tbody>
";

while($row = mysqli_fetch_array($ejecutar)){

        $nombre = $row[1];
        $usuario = $row[2];
        $nivel = $row[3];
        $clave = $row[4];
        $codigo = $row[0];
echo"
<tr>
    <td class='text-left text-white bg-info p-3'style='white-space: nowrap; width: 1px;'> $nombre</td>
    <td class='text-left text-white bg-info p-3'style='white-space: nowrap; width: 1px;'> $usuario</td>
    <td class='text-center text-white bg-info'style='white-space: nowrap; width: 1px;'> $nivel</td>
    <td class='text-left text-white bg-info p-3'style='white-space: nowrap; width: 1px;'> $clave</td>
    <td class='bg-info'><button class='btn btn-info' name='eliminar' id='$codigo'onclick='eliminar_usuario(this.id)'> <i class='fas fa-trash-alt'></i></button></td>
</tr>
";
}
echo " </tbody> </table>";

}else {
    echo "
    <div class='alert alert-danger text-center alert-dismissible fade show' role='alert'>
    Lo sentimos! la tabla no cuneta con ningun registro.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>";
}

mysqli_close($con);

?>