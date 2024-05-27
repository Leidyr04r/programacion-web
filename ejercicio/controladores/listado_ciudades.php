<?php

//Paso 1
include "config/conexion.php";

//paso 2

//paso 3
$sql = "SELECT cod, nombre FROM lista_ciudad order by nombre ASC";

//Paso 4
foreach($dbh->query($sql) as $row){
    $cod = $row[0];
    $ciudad = $row[1];
    print "
    <option value='".$cod."'>".$ciudad."</option>
    ";
}

?>