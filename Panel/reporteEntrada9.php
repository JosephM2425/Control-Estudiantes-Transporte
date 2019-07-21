<?php

require('reportes/fpdf.php');
ob_clean();

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../logoCTPA.png',10,8,40);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(140);
    // Título
    $this->Cell(70,10,'Reporte De Estudiantes, Buseta#9',0,0,'C');
    $this->Ln(15);
    $this->Cell(130);
    $this->Cell(40,10,'L = Lunes,  M = Martes,  Mi = Miercoles,  J = Jueves,  V = Viernes',0,0,'C');
    $this->Ln(10);
    $this->Cell(130);
    $this->Cell(40,10,'Ent = Hora de Entrada,   Sal = Hora de Salida',0,0,'C');
    $this->Ln(15);
    $this->Cell(130);
    $this->Cell(40,10,'*Recuerde Descargar el documento con la fecha del dia respectivo*',0,0,'C');
    // Salto de línea
    $this->Ln(15);
    $this->Cell(55, 10, 'Nombre', 1, 0, 'C', 0);
    $this->Cell(28, 10, 'L-Ent', 1, 0, 'C', 0);
    $this->Cell(28, 10, 'L-Sal', 1, 0, 'C', 0);
    $this->Cell(28, 10, 'M-Ent', 1, 0, 'C', 0);
    $this->Cell(28, 10, 'M-Sal', 1, 0, 'C', 0);
    $this->Cell(28, 10, 'Mi-Ent', 1, 0, 'C', 0);
    $this->Cell(28, 10, 'Mi-Sal', 1, 0, 'C', 0);
    $this->Cell(28, 10, 'J-Ent', 1, 0, 'C', 0);
    $this->Cell(28, 10, 'J-Sal', 1, 0, 'C', 0);
    $this->Cell(28, 10, 'V-Ent', 1, 0, 'C', 0);
    $this->Cell(28, 10, 'V-Sal', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',12);
    $this->Cell(80,10, 'Colegio Tecnico Profesional De Aserri', 1, 0, 'C', 0);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'cn.php';
$consul = "SELECT * FROM buseta9";
$result = $mysqli->query($consul);


// Creación del objeto de la clase heredada
$pdf = new PDF('L', 'mm', 'legal');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

while ($row = $result->fetch_assoc()) {
  $pdf->Cell(55, 10, $row['nombre'], 1, 0, 'C', 0);
  $pdf->Cell(28, 10, $row['lunes_entrada'], 1, 0, 'C', 0);
  $pdf->Cell(28, 10, $row['lunes_salida'], 1, 0, 'C', 0);
  $pdf->Cell(28, 10, $row['martes_entrada'], 1, 0, 'C', 0);
  $pdf->Cell(28, 10, $row['martes_salida'], 1, 0, 'C', 0);
  $pdf->Cell(28, 10, $row['miercoles_entrada'], 1, 0, 'C', 0);
  $pdf->Cell(28, 10, $row['miercoles_salida'], 1, 0, 'C', 0);
  $pdf->Cell(28, 10, $row['jueves_entrada'], 1, 0, 'C', 0);
  $pdf->Cell(28, 10, $row['jueves_salida'], 1, 0, 'C', 0);
  $pdf->Cell(28, 10, $row['viernes_entrada'], 1, 0, 'C', 0);
  $pdf->Cell(28, 10, $row['viernes_salida'], 1, 1, 'C', 0);
}






$pdf->Output();
 ?>
