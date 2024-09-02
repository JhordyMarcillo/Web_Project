<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "proyecto";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Recoger los datos del formulario
$idPerfil = $_POST['DNIProvider'];
$nombre = $_POST['NameProvider'];
$descripcion = $_POST['descripcion'];
$accesos = isset($_POST['accesos']) ? implode(',', $_POST['accesos']) : '';

try {
    // Iniciar la transacción
    $conn->begin_transaction();

    // Insertar en la tabla roles
    $stmt = $conn->prepare("INSERT INTO roles (id, nombre, descripcion, accesos) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $idPerfil, $nombre, $descripcion, $accesos);
    $stmt->execute();

    // Confirmar la transacción
    $conn->commit();

    echo "<script>alert('Rol guardado correctamente.');
    window.location.href='admin.php';
    </script>";
} catch (Exception $e) {
    // Revertir la transacción en caso de error
    $conn->rollback();
    echo "<script>alert('Error al guardar el rol: " . $e->getMessage() . "');
    window.location.href='admin.php';
    </script>";
}

// Cerrar la conexión
$conn->close();
?>
