<?php

require "../config/conexion.php";

// Almacenar las variables
$cantidad = $_POST["cantidad"];


$subtotal = $cantidad * 4000;

$iva = $subtotal * 0.19;

$total = $subtotal + $iva;

$sql_insertar = "INSERT INTO cerveza (cantidad, subtotal, iva, total, fecha_sys) 
                VALUES ('$cantidad', '$subtotal', '$iva', '$total', now())";


if ($dbh->query($sql_insertar)) {
    echo "<script src='../js/sweetalert.js'></script>"; 
    echo "<script>
            // Función para mostrar el SweetAlert y redireccionar
            function mostrarSweetAlert() {
                swal({
                    title: 'Venta actualizada correctamente',
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
    echo "Error actualizando la venta: ";
}
?>

