<script src="../js/sweetalert2@11.js"></script>
.
<?php

// Paso 1: Importar la librería de la base de datos
require "../config/conexion.php";

// Almacenar las variables

$documento = $_POST["documento"];
$carrera = $_POST["carrera"];

// Paso 3: Armar el SQL en una variable
$sql_actualizar = "UPDATE boletas SET carrera = '$carrera' WHERE documento = '$documento'";


// Paso 4: Enviar a la base de datos
if ($dbh->query($sql_actualizar)) {

    echo "<script>
    // Función para mostrar el SweetAlert con un mensaje simple
    function mostrarMensaje() {
        Swal.fire({
            title: ' actualizada',
            icon: 'success',
            showConfirmButton: false,
            timer: 1500 // Cerrar automáticamente después de 1.5 segundos
        }).then((result) => {
            // Redireccionar a la página deseada después de que se cierre el SweetAlert
            window.location.href = '../actualizar.html';
        });
    }
    
    // Llamar a la función cuando sea necesario, por ejemplo, al cargar la página
    window.onload = function() {
        mostrarMensaje();
    };
</script>";
} else {
    echo "error actualizando  ";
}

?>