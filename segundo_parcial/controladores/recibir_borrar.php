<script src='../js/sweetalert.js'></script>
.
<?php

// Paso 1: Importar la librería de la base de datos
require "../config/conexion.php";

// Almacenar las variables
$codigo = $_POST["codigo"];

// Paso 3: Armar el SQL en una variable
$sql_borrar = "DELETE FROM cerveza WHERE cod=".$codigo."";

// Paso 4: Enviar a la base de datos
if ($dbh->query($sql_borrar)) {

    echo "<script>
        // Función para mostrar el SweetAlert y redireccionar
        function mostrarSweetAlert() {
            swal({
                title: 'venta eliminada correctamente',
                icon: 'success',
                buttons: false,
                timer: 2000 // 2 segundos
            }).then(() => {
                // Redirigir a otra página
                window.location.href = '../borrar.html';
            });
        }

        // Llamar a la función al cargar la página
        window.onload = function() {
            mostrarSweetAlert();
        };
    </script>";
} else {
    echo "Error borrando la venta: ";
}

?>
