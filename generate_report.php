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
$pdf->Cell(0, 10, 'Reporte de Proveedores', 0, 1, 'C');
$pdf->Ln(10); // Espacio antes de la tabla

// Agregar encabezados de tabla con ajuste de ancho
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, 'RUC', 1);
$pdf->Cell(40, 10, 'Compania', 1);
$pdf->Cell(60, 10, 'Direccion', 1);
$pdf->Cell(30, 10, 'Telefono', 1);
$pdf->Cell(40, 10, 'Correo', 1);
$pdf->Cell(40, 10, 'Pagina web', 1);
$pdf->Ln();

// Consultar todos los proveedores
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM proveedores";
$result = $conn->query($sql);


// Agregar datos de proveedores con ajuste de ancho
$pdf->SetFont('Arial', '', 12);
while ($provider = $result->fetch_assoc()) {
    $pdf->Cell(30, 10, $provider['ruc'], 1);
    $pdf->Cell(40, 10, $provider['compania'], 1);
    $pdf->Cell(60, 10, $provider['direccion'], 1);
    $pdf->Cell(30, 10, $provider['telefono'], 1);
    $pdf->Cell(40, 10, $provider['email'], 1);
	$pdf->Cell(40, 10, $provider['web'], 1);
    $pdf->Ln();
}
// Salida del PDF
$pdf->Output('D', 'Reporte_Proveedores_' . date('d_m_Y') . '.pdf');

$conn->close();
?>
