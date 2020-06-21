<?php
require('fpdf/fpdf.php');
include('database.php');



class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Certificado de reserva',0,0,'C');
    $this->Ln(20);
    $this->Cell(30,10,'Reservas de canchas.com',0,0,'B');
    // Salto de línea
    $this->Ln(20);
    
    $this->Cell(90, 10, 'Nombre', 1, 0, '', 0);
    $this->Cell(30, 10, 'Razon ', 1, 0, '', 0);
    $this->Cell(30, 10, 'Reserva', 1, 1, '', 0);
    
    
    
}
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$consulta = "SELECT * FROM reserva, equipamiento, teams";
$resultado = $conn->query($consulta);


$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);



$row = $resultado->FETCH();
    $pdf->Cell(90, 10, $row['name'], 1, 0, '', 0);
    $pdf->Cell(30, 10, $row['description'], 1, 0, '', 0);
    $pdf->Cell(30, 10, $row['id'], 1, 1, '', 0);
    
    $pdf->Cell(30,10, "Lider",  1, '',2);
    $pdf->Cell(30,10, $row['lider'], 1, 1, '', 0);
    $pdf->Cell(30,10, "categoria",  1, '',2);
    $pdf->Cell(30,10, $row['category'], 1, 1, '', 0);
    $pdf->Cell(30,10, "miembros",  1, '',2);
    $pdf->Cell(30,10, $row['miembros'], 1, 1, '', 0);
    $pdf->Cell(30,10, "Equipo",  1, '',2);
    $pdf->Cell(30,10, $row['team'], 1, 1, '', 0);
    
    $pdf->Ln(4);
    $pdf->Cell(90, 10, "Tus apartados fueron : ", 0, 0, '', 0);
    $pdf->Ln(10);
    $pdf->Cell(30,10, "Camisetas: ", 0, '',2);
    $pdf->Cell(30,10, $row['camisetas'], 0, 1, '', 0);
    $pdf->Cell(30,10, "Protectores: ", 0,  '',2);
    $pdf->Cell(30,10, $row['protectores'], 0, 1, '', 0);
    $pdf->Cell(30,10, "Rodilleras: ", 0, '',2);
    $pdf->Cell(30,10, $row['rodilleras'], 0, 1, '', 0);
    $pdf->Cell(30,10, "Zapatos: ", 0, '',2);
    $pdf->Cell(30,10, $row['zapatos'], 0, 1, '', 0);
    $pdf->Ln(20);
    
    $pdf->Cell(30, 10, $row['created_at']);



$pdf->Output();
?>