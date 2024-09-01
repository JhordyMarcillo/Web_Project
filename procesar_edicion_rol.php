<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "proyecto";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario de edición
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$accesos = isset($_POST['accesos']) ? implode(",", $_POST['accesos']) : '';

// Actualizar los datos del rol
$sql = "UPDATE roles SET nombre='$nombre', descripcion='$descripcion', accesos='$accesos' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Rol actualizado correctamente";
    // Redirigir a la página de administración o donde desees
    header("Location: admin.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
