<?php

//importar 1: la libreria de la base de BD

require "../config/conexion.php";

// paso 2 almacenar las variables 

$producto = $_POST["producto"];
$valor = $_POST["valor"];


//paso 3 armar el sql en una variables 
$sql_insertar = "INSERT INTO intentando
(fecha_sys, producto, valor,)
VALUES (now(),'".$producto."', '".$valor.")";

//paso 4 Enviar a la BD
   
if($dbh->query($sql_insertar))
{
    echo "producto registrado";
}else
{
    echo "error al registrar";
}

?>