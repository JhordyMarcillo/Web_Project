<?php
require_once 'phpqrcode/qrlib.php'; // Incluye la biblioteca PHP QR Code

$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "proyecto";

$codigo = $_POST['BarCode'];
$nombre = $_POST['NameProduct'];
$unidades = $_POST['StrockProduct'];
$precio = $_POST['PriceProduct'];
$categoria = $_POST['Categoria'];
$marca = $_POST['markProduct'];

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Generar el código QR
$qrDir = 'imagenes/qr/'; // Directorio donde se guardarán los códigos QR

$qrFile = $qrDir . $codigo . '_' . $nombre . '_' .$categoria . '_' . $marca .'_'. '.png';
QRcode::png($codigo, $qrFile, 'L', 4, 2);

// Insertar datos en la base de datos
$sql = "INSERT INTO producto (codigo, nombre, unidades, precio, categoria, marca, qr)
VALUES ('$codigo', '$nombre', '$unidades', '$precio', '$categoria', '$marca', '$qrFile')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Datos guardados correctamente ...');
  window.location.href='products.php';
  </script>";
} else {
  echo "<script> alert('No pudo guardar datos ...'); 
  window.location.href='products.php';
  </script>";
}

$conn->close();
?>
