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
$cedula = $_POST['DNIAdmin'];
$nombre = $_POST['NameAdmin'];
$apellidos = $_POST['LastNameAdmin'];
$direccion = $_POST['addressAdmin'];
$telefono = $_POST['phoneAdmin'];
$correo = $_POST['emailAdmin'];
$estadoCivil = $_POST['estado'];
$fechaNacimiento = $_POST['dateAdmin'];
$user = $_POST['UserNameAdmin'];
$userPassword = $_POST['passwordAdmin']; // Contraseña en texto plano, se encriptará después

// Encriptar la contraseña
$hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

try {
    // Iniciar la transacción
    $conn->begin_transaction();

    // Insertar en la tabla cliente
    $stmt1 = $conn->prepare("INSERT INTO cliente (cedula, nombre, apellido, direccion, telefono, correo, estadoCivil, fechaNacimiento) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt1->bind_param("ssssssss", $cedula, $nombre, $apellidos, $direccion, $telefono, $correo, $estadoCivil, $fechaNacimiento);
    $stmt1->execute();

    // Obtener el ID del último registro insertado
    $last_id = $conn->insert_id;

    // Insertar en la tabla login
    $stmt2 = $conn->prepare("INSERT INTO login (user, password) VALUES (?, ?)");
    $stmt2->bind_param("ss", $user, $hashedPassword);
    $stmt2->execute();

    // Confirmar la transacción
    $conn->commit();

    echo "<script>alert('Datos guardados correctamente.');
    window.location.href='client.php';
    </script>";
} catch (Exception $e) {
    // Revertir la transacción en caso de error
    $conn->rollback();
    echo "<script>alert('Error al guardar los datos: " . $e->getMessage() . "');
    window.location.href='client.php';
    </script>";
}

// Cerrar la conexión
$conn->close();
?>
