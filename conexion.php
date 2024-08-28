<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "proyecto";

$cedula = $_POST['cedula'];
$nombre = $_POST['NameClient'];
$apellidos = $_POST['LastNameClient'];
$direccion = $_POST['addressClient1'];
$telefono = $_POST['phoneClient'];
$correo = $_POST['emailClient'];
$estadoCivil = $_POST['estado'];
$fechaNacimiento = $_POST['dateAdmin'];



//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO cliente (cedula, nombre, apellido, direccion, telefono, correo, estadoCivil, fechaNacimiento)
VALUES ('$cedula', '$nombre', '$apellidos', '$direccion', '$telefono', '$correo', '$estadoCivil', '$fechaNacimiento')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Datos guardados correctamente ...');
  window.location.href='client.php';
  </script>";
} else {
  echo "<script> alert('No pudo guardar datos ...'); 
  window.location.href='client.php';
  </script>";
}

$conn->close();
?>