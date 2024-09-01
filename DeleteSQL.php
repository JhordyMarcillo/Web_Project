<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "proyecto";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener el ID y el estado actual del registro
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$currentStatus = isset($_GET['status']) ? $_GET['status'] : 'Activo';

// Determinar el nuevo estado
$newStatus = ($currentStatus == 'Activo') ? 'Inactivo' : 'Activo';

if ($id > 0) {
    // SQL para actualizar el estado del cliente
    $sql = "UPDATE cliente SET estado='$newStatus' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Datos guardados correctamente');
        window.location.href='Delete.php?status=$currentStatus';
        </script>";
    } else {
        echo "Error a la conexion " . $conn->error;
    }
} else {
    echo "ID inválido.";
}

// Cerrar la conexión
$conn->close();
?>
