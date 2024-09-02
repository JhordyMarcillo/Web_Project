<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "proyecto";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener los valores enviados por POST
$id = $_POST['id']; // Asegúrate de que 'id' se envía desde el formulario
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$estadoCivil = $_POST['estadoCivil'];
$fechaNacimiento = $_POST['fechaNacimiento'];

// Preparar la consulta SQL
$sql = "UPDATE cliente SET cedula='$cedula', nombre='$nombre', apellido='$apellido', direccion='$direccion', telefono='$telefono', correo='$correo', estadoCivil='$estadoCivil', fechaNacimiento='$fechaNacimiento' WHERE id=$id";

// Ejecutar la consulta y verificar si se realizó correctamente
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Datos guardados correctamente ...');
  window.location.href='client.php';
  </script>";
} else {
    echo "<script>alert('dATOS ERRONEOS ...');
  window.location.href='client.php';
  </script>";
}

// Cerrar la conexión
$conn->close();
?>
