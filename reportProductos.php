<?php
require('fpdf186/fpdf.php'); 

$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "proyecto";

// Establece la zona horaria
date_default_timezone_set('America/Guayaquil');

$pdf = new FPDF('L', 'mm', 'A4'); // 'L' para orientación horizontal, 'mm' para milímetros, 'A4' para tamaño de papel
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);


$pdf->Cell(0, 10, 'Nombre de la Empresa', 0, 1, 'C'); // Nombre de la empresa centrado
$pdf->Ln(10); 

// Agregar fecha y hora
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Fecha y Hora: ' . date('d/m/Y H:i'), 0, 1, 'R'); 
$pdf->Ln(10); // Espacio antes del título

$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Reporte de Productos', 0, 1, 'C');
$pdf->Ln(10); // Espacio antes de la tabla

// Agregar encabezados de tabla con ajuste de ancho
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, 'Codigo', 1);
$pdf->Cell(50, 10, 'Nombre', 1);
$pdf->Cell(30, 10, 'Unidades', 1);
$pdf->Cell(30, 10, 'Precio', 1);
$pdf->Cell(50, 10, 'Categoria', 1);
$pdf->Cell(50, 10, 'Marca', 1);
$pdf->Ln();

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT codigo, nombre, unidades, precio, categoria, marca FROM producto";
$result = $conn->query($sql);

$pdf->SetFont('Arial', '', 12);
while ($producto = $result->fetch_assoc()) {
    $pdf->Cell(30, 10, $producto['codigo'], 1);
    $pdf->Cell(50, 10, $producto['nombre'], 1);
    $pdf->Cell(30, 10, $producto['unidades'], 1);
    $pdf->Cell(30, 10, $producto['precio'], 1);
    $pdf->Cell(50, 10, $producto['categoria'], 1);
    $pdf->Cell(50, 10, $producto['marca'], 1);
    $pdf->Ln();
}

// Pie de página
$pdf->Ln(10);
$pdf->SetFont('Arial', 'I', 10);
$pdf->Cell(0, 10, 'Reporte generado automaticamente - ' . date('d/m/Y H:i'), 0, 0, 'C');

// Salida del PDF
$pdf->Output('D', 'Reporte_Productos_' . date('d_m_Y') . '.pdf');

$conn->close();
?>
