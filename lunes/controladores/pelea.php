<?php

//importar 1: la libreria de la base de BD

require "../config/conexion.php";

// paso 2 almacenar las variables 

$sexo1 = $_POST["sexo1"];
$nombre1 = $_POST["nombre1"];
$sexo2 = $_POST["sexo2"];
$nombre2 = $_POST["nombre2"];
$categoria = $_POST["categoria"];

//paso 3 armar el sql en una variables 
$sql_insertar = "INSERT INTO parcial 
(fecha_sys, sexo1, nombre1, sexo2, nombre2, categoria)
VALUES (now(),'".$sexo1."', '".$nombre1."', '".$sexo2."','".$nombre2."',".$categoria.")";

//paso 4 Enviar a la BD
   
if($dbh->query($sql_insertar))
{
    echo "informacion registrada correctamente del jugador";
}else
{
    echo "error registrando la informacion";
}

?>