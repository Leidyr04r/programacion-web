<?php
require "../config/conexion.php";

if(isset($_POST["cantidad"])) {
    
    $cantidad = $_POST["cantidad"]; 
    $total = $cantidad * 3000; 

    $sql_insertar = "INSERT INTO compra (cantidad, total, fecha_sys) 
                     VALUES (:cantidad, :total, NOW())"; 

    $stmt = $dbh->prepare($sql_insertar);
    $stmt->bindParam(':cantidad', $cantidad);
    $stmt->bindParam(':total', $total); 

    if ($stmt->execute()) {
        echo "<script src='../js/sweetalert.js'></script>";
        echo "<script>
            // Función para mostrar el SweetAlert y redireccionar
            function mostrarSweetAlert() {
                swal({
                    title: 'Compra registrada correctamente',
                    icon: 'success',
                    buttons: false,
                    timer: 2000 // 2 segundos
                }).then(() => {
                    // Redirigir a otra página
                    window.location.href = '../index2.html';
                });
            }

            // Llamar a la función al cargar la página
            window.onload = function() {
                mostrarSweetAlert();
            };
        </script>";
    } else {
        echo "Error actualizando la compra: " . $stmt->errorInfo()[2]; 
    }
} else {
    echo "Error: No se recibió la cantidad.";
}
?>


<