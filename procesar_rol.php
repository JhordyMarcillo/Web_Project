<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "proyecto";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$id_perfil = $_POST['DNIProvider'];
$nombre = $_POST['NameProvider'];
$descripcion = $_POST['descripcion'];
$accesos = isset($_POST['accesos']) ? implode(",", $_POST['accesos']) : '';

// Insertar el nuevo rol en la base de datos
$sql = "INSERT INTO roles (id, nombre, descripcion, accesos) VALUES ('$id_perfil', '$nombre', '$descripcion', '$accesos')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo rol agregado correctamente";
    // Redirigir a la página de ingreso de usuario
    header("Location: admin.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
