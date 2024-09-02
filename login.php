<?php
session_start(); // Iniciar la sesión

$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "proyecto";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = trim($_POST['username']);
    $pass = trim($_POST['password']);
    
    if (!empty($user) && !empty($pass)) {
        $sql = "SELECT * FROM cliente WHERE TRIM(user) = ?";
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            $stmt->bind_param("s", $user);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows === 1) {
                $user_data = $result->fetch_assoc();
                $hashedPassword = $user_data['password'];
                
                if (password_verify($pass, $hashedPassword)) {
                    // Guardar el rol del usuario en la sesión
                    $_SESSION['rol_id'] = $user_data['rol_id'];
                    
                    echo "<script>
                    window.location.href='home.php';
                    </script>";
                } else {
                    echo "<script>alert('Contraseña incorrecta');
                    window.location.href='index.html'</script>";
                }
            } else {
                echo "<script>alert('Usuario no encontrado');
                window.location.href='index.html'</script>";
            }
            $stmt->close();
        } else {
            echo "<script>alert('Error en la consulta.');
            window.location.href='index.html'</script>";
        }
    } else {
        echo "<script>alert('Por favor, complete todos los campos');
        window.location.href='index.html'</script>";
    }
}

$conn->close();
?>
