<?php

$servername = "localhost";
$username = "admin";
$dbPassword = "admin"; // Cambié el nombre de la variable para evitar confusión
$dbname = "proyecto";


// Recoger los datos del formulario
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


// Crear la conexión
$conn = new mysqli($servername, $username, $dbPassword, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insertar los datos del cliente en la tabla `cliente`
$sql = "INSERT INTO cliente (cedula, nombre, apellido, direccion, telefono, correo, estadoCivil, fechaNacimiento, user, password) 
VALUES ('$cedula', '$nombre', '$apellidos', '$direccion', '$telefono', '$correo', '$estadoCivil', '$fechaNacimiento', '$user', '$$userPasswor')";

if ($conn->query($sql) === TRUE) {
  // Obtener el ID del cliente recién insertado
  $cliente_id = $conn->insert_id;

  // Procesar los roles seleccionados
  if (isset($_POST['roles'])) {
    $rolesSeleccionados = $_POST['roles'];

    // Insertar cada rol seleccionado en la tabla `cliente_roles`
    foreach ($rolesSeleccionados as $idRol) {
      $sqlRol = "INSERT INTO cliente_roles (cliente_id, rol_id) VALUES ('$cliente_id', '$idRol')";
      if (!$conn->query($sqlRol)) {
        echo "<script> alert('Error al guardar el rol: " . $conn->error . "'); 
        window.location.href='client.php';
        </script>";
        exit;
      }
    }
  }

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
