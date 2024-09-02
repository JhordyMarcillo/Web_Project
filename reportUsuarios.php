<?php
require('fpdf186/fpdf.php'); // Incluye la biblioteca FPDF

$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "proyecto";

// Establece la zona horaria
date_default_timezone_set('America/Guayaquil'); // Cambia a tu zona horaria

// Crear instancia de FPDF con orientación horizontal
$pdf = new FPDF('L', 'mm', 'A4'); // 'L' para orientación horizontal, 'mm' para milímetros, 'A4' para tamaño de papel
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

// Agregar nombre de la empresa y logo
//$pdf->Image('path/to/logo.png', 10, 10, 30); // Ajusta la ruta y el tamaño del logo
$pdf->Cell(0, 10, 'Nombre de la Empresa', 0, 1, 'C'); // Nombre de la empresa centrado
$pdf->Ln(10); // Espacio después del nombre

// Agregar fecha y hora
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Fecha y Hora: ' . date('d/m/Y H:i'), 0, 1, 'R'); // Ajusta el formato de la fecha y hora
$pdf->Ln(10); // Espacio antes del título

// Agregar título del reporte
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Reporte de Clientes', 0, 1, 'C');
$pdf->Ln(10); // Espacio antes de la tabla

// Agregar encabezados de tabla con ajuste de ancho
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, 'Cedula', 1);
$pdf->Cell(30, 10, 'Nombre', 1);       // Reducido el ancho
$pdf->Cell(30, 10, 'Apellido', 1);     // Reducido el ancho
$pdf->Cell(50, 10, 'Direccion', 1);
$pdf->Cell(30, 10, 'Telefono', 1);
$pdf->Cell(50, 10, 'Correo', 1);
$pdf->Cell(30, 10, 'Estado Civil', 1);
$pdf->Cell(30, 10, 'Fecha Nac.', 1);   // Reducido el ancho
$pdf->Ln();

// Consultar todos los clientes
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM cliente";
$result = $conn->query($sql);

// Agregar datos de clientes con ajuste de ancho
$pdf->SetFont('Arial', '', 12);
while ($client = $result->fetch_assoc()) {
    $pdf->Cell(30, 10, $client['cedula'], 1);
    $pdf->Cell(30, 10, $client['nombre'], 1);        // Ajustado a 30 mm
    $pdf->Cell(30, 10, $client['apellido'], 1);      // Ajustado a 30 mm
    $pdf->Cell(50, 10, $client['direccion'], 1);
    $pdf->Cell(30, 10, $client['telefono'], 1);
    $pdf->Cell(50, 10, $client['correo'], 1);
    $pdf->Cell(30, 10, $client['estadoCivil'], 1);
    $pdf->Cell(30, 10, $client['fechaNacimiento'], 1); // Ajustado a 30 mm
    $pdf->Ln();
}

// Pie de página
$pdf->Ln(10);
$pdf->SetFont('Arial', 'I', 10);
$pdf->Cell(0, 10, 'Reporte generado automaticamente - ' . date('d/m/Y H:i'), 0, 0, 'C');

// Salida del PDF
$pdf->Output('D', 'Reporte_Clientes_' . date('d_m_Y') . '.pdf');

$conn->close();
?>
