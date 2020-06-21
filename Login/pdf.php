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
    $this->Cell(70,10,'Title',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(90, 10, 'name', 1, 0, '', 0);
    $this->Cell(30, 10, 'description', 1, 0, '', 0);
    $this->Cell(30, 10, 'reserv', 1, 1, '', 0);

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

$consulta = "SELECT * FROM reserva";
$resultado = $conn->query($consulta);


$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while($row = $resultado->FETCH()){
    $pdf->Cell(90, 10, $row['name'], 1, 0, '', 0);
    $pdf->Cell(30, 10, $row['description'], 1, 0, '', 0);
    $pdf->Cell(30, 10, $row['reserv'], 1, 1, '', 0);
}

$pdf->Output();
?>