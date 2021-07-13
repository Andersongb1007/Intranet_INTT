<?php
require('fpdf.php');

class PDF extends FPDF
{
function Header()
{

	$this->Image('../public/img/logo-intt.jpg', $x=null, $y=null, $w=180, $h=25,);
	$this->Ln(7);
	global $title;

	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Calculamos ancho y posici�n del t�tulo.
	$w = $this->GetStringWidth($title)+6;
	$this->SetX((210-$w)/2);
	// Colores de los bordes, fondo y texto
	$this->SetDrawColor(255, 130, 0);
	$this->SetFillColor(255, 0, 0, 0.63);
	$this->SetTextColor(255, 255, 255);
	// Ancho del borde (1 mm)
	$this->SetLineWidth(1);
	// T�tulo
	$this->Cell($w,9,$title,1,1,'C',true);
	// Salto de l�nea
	$this->Ln(10);
}

function Footer()
{
	// Posici�n a 1,5 cm del final
	$this->SetY(-15);
	// Arial it�lica 8
	$this->SetFont('Arial','I',8);
	// Color del texto en gris
	$this->SetTextColor(128);
	// N�mero de p�gina
	$this->Cell(0,10,'Pagina '.$this->PageNo(),0,0,'C');
}

function ChapterTitle($num, $label)
{
	// Arial 12
	$this->SetFont('Arial','',12);
	// Color de fondo
	$this->SetFillColor(243,233,233);
	// T�tulo
	$this->Cell(0,6,"$num : $label",0,1,'L',true);
	// Salto de l�nea
	$this->Ln(4);
}

function ChapterBody($file)
{
	// Leemos el fichero
	$txt = file_get_contents($file);
	// Times 12
	$this->SetFont('Times','',12);
	// Imprimimos el texto justificado
	$this->MultiCell(0,5,$txt);
	// Salto de l�nea
	$this->Ln();
	$this->Ln();
	$this->Ln();
	$this->Ln();
	$this->Ln();
	// Cita en it�lica
	$this->SetFont('','I');
	$this->Cell(0,1,'(Documento elaborado por los Gerentes del Proyecto)');

}

function PrintChapter($num, $title, $file)
{
	$this->AddPage();
	$this->ChapterTitle($num,$title);
	$this->ChapterBody($file);
}
}

$pdf = new PDF();
$title = 'Llenar esta planilla para solicitar un Nuevo Usuario';
$pdf->SetTitle($title);
$pdf->SetAuthor('Intranet');
$pdf->PrintChapter(1,'Solicitud de Requerimentos de la intranet','solicitud.txt');
$pdf->Output();
?>
