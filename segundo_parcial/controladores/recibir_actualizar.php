<?php

// Paso 1: Importar la librería de la base de datos
require "../config/conexion.php";

// Almacenar las variables
$cod = $_POST["cod"];
$cantidad = $_POST['cantidad']; 
$total = $_POST['total']; 


$sql_actualizar = "UPDATE compra SET cantidad = '$cantidad', total = '$total', fecha_sys = NOW() WHERE cod = '$cod'";

if ($dbh->query($sql_actualizar)) {
    echo "<script src='../js/sweetalert.js'></script>"; 

    echo "<script>
        // Función para mostrar el SweetAlert y redireccionar
        function mostrarSweetAlert() {
            swal({
                title: 'Compra actualizada correctamente',
                icon: 'success',
                buttons: false,
                timer: 2000 // 2 segundos
            }).then(() => {
                // Redirigir a otra página
                window.location.href = '../actualizar.html';
            });
        }

        // Llamar a la función al cargar la página
        window.onload = function() {
            mostrarSweetAlert();
        };
    </script>";
} else {
    echo "Error actualizando la compra: ";
}
?>




