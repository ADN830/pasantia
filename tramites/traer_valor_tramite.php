<?php 

//conexion
include_once('conexion.php');

if (isset($_POST['cod'])) {
    $codig=$_POST['cod'];

    // trer por  consulta el codigo y respuestas
    $sql_consulta =  sprintf("SELECT * FROM datos WHERE codigo = '%s'",$codig);
    $sql_resultado = mysqli_query($con,$sql_consulta);
    $row = $sql_resultado -> fetch_array(MYSQLI_ASSOC);

    echo"
    <table class='table col-md-12 col-sm-12 table-bordered border-primary' id='tb'>
          <thead>
            <tr class=''>
            <label class'alert alert-danger text-center col-md-12'> $row[pregunta]</label>
              <th scope='col'>Concepto</th>
              <th scope='col'>Valor</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>$row[codigo]</th>
              <td> $row[codigo]</td>
            </tr>
            <tr>
              <th>$row[codigo]</th>
              <td>$row[codigo]</td>
            </tr>
            <tr>
              <th>$row[codigo]</th>
              <td>$row[codigo]</td>
            </tr>
            <tr>
              <th>$row[codigo]</th>
              <td>$row[codigo]</td>
            </tr>
            <th>$row[codigo]</th>
            <td>$row[codigo]</td>
            <tr>
              <th>$row[codigo]</th>
              <td>$row[codigo]</td>
            </tr>
            <tr>
              <th>valor total</th>
              <td>total a pagar</td>
            </tr>
          </tbody>
        </table>
      </div>  
    </div>   
    ";
};
mysqli_close($con);
?>