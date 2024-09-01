<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "proyecto";

$ruc = $_POST['DNIProvider'];
$compania = $_POST['NameProvider'];
$direccion = $_POST['addressProvider'];
$telefono = $_POST['phoneProvider'];
$email = $_POST['emailProvider'];
$web = $_POST['webProvider'];

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insertar datos en la base de datos
$sql = "INSERT INTO proveedores (ruc, compania, direccion, telefono, email, web)
VALUES ('$ruc', '$compania', '$direccion', '$telefono', '$email', '$web')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Datos guardados correctamente ...');
  window.location.href='providers.php';
  </script>";
} else {
  echo "<script> alert('No pudo guardar datos ...'); 
  window.location.href='providers.php';
  </script>";
}

$conn->close();
?>
