<script src="../js/sweetalert2@11.js"></script>
.
<?php

// Paso 1: Importar la librería de la base de datos
require "../config/conexion.php";

// Almacenar las variables



$cod = $_POST["cod"];
$valor_pagado = $_POST["valor_pagado"];
$valor_restante = $_POST["valor_restante"];


// Paso 3: Armar el SQL en una variable
$sql_actualizar = "UPDATE pago SET valor_pagado = '$valor_pagado', valor_restante = '$valor_restante' WHERE cod = '$cod'";


// Paso 4: Enviar a la base de datos
if ($dbh->query($sql_actualizar)) {

    echo "<script>
    // Función para mostrar el SweetAlert con un mensaje simple
    function mostrarMensaje() {
        Swal.fire({
            title: 'Persona  actualizada',
            icon: 'success',
            showConfirmButton: false,
            timer: 1500 // Cerrar automáticamente después de 1.5 segundos
        }).then((result) => {
            // Redireccionar a la página deseada después de que se cierre el SweetAlert
            window.location.href = '../pago.html';
        });
    }
    
    // Llamar a la función cuando sea necesario, por ejemplo, al cargar la página
    window.onload = function() {
        mostrarMensaje();
    };
</script>";
} else {
    echo "error actualizando la persona: ";
}

?>