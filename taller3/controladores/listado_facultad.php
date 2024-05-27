<?php

//Paso 1
include "config/conexion.php";

//paso 2


//paso 3
$sql = "SELECT cod, carrera FROM carrera order by carrera ASC";

//Paso 4
foreach($dbh->query($sql) as $row){
    $cod = $row[0];
    $carrera = $row[1];
    print "
    <option value='".$cod."'>".$carrera."</option>
    ";
}

?>