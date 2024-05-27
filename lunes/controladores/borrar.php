<script src="../js/sweetalert2@11.js"></script>
.

<?php

//importar 1: la libreria de la base de BD

require "../config/conexion.php";

// paso 2 almacenar las variables 

$codigo = $_POST["codigo"];


//paso 3 armar el sql en una variables 
$sql_borrar = "DELETE FROM personas WHERE cod=".$codigo." ";


//paso 4 Enviar a la BD
   
if($dbh->query($sql_borrar))
{
    echo "<script>
    // Función para mostrar el SweetAlert con un mensaje simple
    function mostrarMensaje() {
        Swal.fire({
            title: 'Persona borrada correctamente',
            icon: 'success',
            showConfirmButton: false,
            timer: 1500 // Cerrar automáticamente después de 1.5 segundos
        }).then((result) => {
            // Redireccionar a la página deseada después de que se cierre el SweetAlert
            window.location.href = '../eliminar.html';
        });
    }
    
    // Llamar a la función cuando sea necesario, por ejemplo, al cargar la página
    window.onload = function() {
        mostrarMensaje();
    };
</script>


    ";
}else
{
    echo "error al borrar informacion";
}

?>