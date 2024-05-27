<?php
include "config/conexion.php";

$nombre = $_POST["nombre"];

$sql = "SELECT * 
FROM proyecto
WHERE nombre like '%".$nombre."%'";


foreach($dbh->query($sql)as $row)
{
    $cod = $row[0];
    $fecha_sys = $row[1];
    $nombre =$row[2];
    $proyecto =$row[3];
    $celular =$row[4];
    $email =$row[5];
    
    print "<tr>
      <td>".$cod."</td>
      <td>".$fecha_sys."</td>
      <td>".$nombre."</td>
      <td>".$proyecto."</td>
      <td>".$celular."</td>
      <td>".$email."</td>
    
      </tr>";
}
?>