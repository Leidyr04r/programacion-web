<script src="../js/sweetalert2@10.js"></script>
.
<?php
//paso 1 importar la liberia  //
require "../config/conexion.php";



//paso 2 almacenar las variables//
$nombre =  $_POST["nombre"];
$proyecto =  $_POST["proyecto"];
$celular =  $_POST["celular"];
$email = $_POST["email"];


//paso 3 armar el sql en una variable//
$sql_insertar = "INSERT INTO proyecto(fecha_sys, nombre, proyecto, celular, email) VALUES (now(), '".$nombre."', '".$proyecto."', '".$celular."', '".$email."')";



//paso 4 enviar a la BD
if($dbh->query($sql_insertar))
{
    echo '<script>
    Swal.fire({
        title: "¡registrandose!",
        text: "REGISTRADO",
        icon: "success",
    showConfirmButton: false
    });
    setTimeout(function(){
        window.location.href = "../index.php";
    }, 3000); // Redirecciona después de 3 segundos
    </script>';
}else
{
    echo "error borrando la persona";
}
?>