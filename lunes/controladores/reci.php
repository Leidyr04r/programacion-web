<?php

//importar 1: la libreria de la base de BD

require "../config/conexion.php";

// paso 2 almacenar las variables 


$nombre = $_POST["nombre"];
$documento = $_POST["documento"];
$telefono = $_POST["telefono"];
$carrera = $_POST["carrera"];

//paso 3 armar el sql en una variables 
$sql_insertar = "INSERT INTO boletas
 ( fecha_sys ,nombre, documento, telefono, carrera) 
VALUES (now(),'".$nombre."', '".$documento."','".$telefono."', ".$carrera.")";

//paso 4 Enviar a la BD
echo $sql_insertar;   

if($dbh->query($sql_insertar))
{
    echo "informacion registrada correctamente";
}else
{
    echo "error registrando la informacion";
}

?>