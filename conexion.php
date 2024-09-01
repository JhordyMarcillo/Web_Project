<?php

$servername = "localhost";
$username = "admin";
$dbPassword = "admin"; // Cambié el nombre de la variable para evitar confusión
$dbname = "proyecto";

// Recoger los datos del formulario, incluyendo el rol seleccionado
$cedula = $_POST['DNIAdmin'];
$nombre = $_POST['NameAdmin'];
$apellidos = $_POST['LastNameAdmin'];
$direccion = $_POST['addressAdmin'];
$telefono = $_POST['phoneAdmin'];
$correo = $_POST['emailAdmin'];
$estadoCivil = $_POST['estado'];
$fechaNacimiento = $_POST['dateAdmin'];
$user = $_POST['UserNameAdmin'];
$userPassword = $_POST['passwordAdmin'];
$rol = isset($_POST['roles']) ? $_POST['roles'][0] : null;  // Asumiendo que solo se selecciona un rol

// Crear la conexión
$conn = new mysqli($servername, $username, $dbPassword, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insertar los datos del cliente en la tabla `cliente`, incluyendo el rol
$sql = "INSERT INTO cliente (cedula, nombre, apellido, direccion, telefono, correo, estadoCivil, fechaNacimiento, user, password, rol) 
VALUES ('$cedula', '$nombre', '$apellidos', '$direccion', '$telefono', '$correo', '$estadoCivil', '$fechaNacimiento', '$user', '$userPassword', '$rol')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Datos guardados correctamente ...');
  window.location.href='client.php';
  </script>";
} else {
  echo "<script> alert('No pudo guardar datos ...'); 
  window.location.href='client.php';
  </script>";
}

// Cerrar la conexión
$conn->close();
?>
