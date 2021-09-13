<?php
//include connection file 
include_once("connection.php");
include_once('fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image( 'logo.png',10,10,40,15);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(100,10,'Registered Student',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(80,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    // Title
    $this->Cell(80,10,'Sign of Manager',1,0,'C');    
}
}
$db = new dbObj();
$connString =  $db->getConnstring();
// $display_heading = array('id'=>'ID', 'name'=> 'Name', 'fatherName'=> 'Father Name','mobile'=> 'Mobile',);
$display_heading = array('id'=>'Name', 'employee_name'=> 'Father Name', 'employee_age'=> 'Email','employee_salary'=> 'Course',);
$result = mysqli_query($connString, "SELECT  name, father_name, course, email  FROM students ") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM employee");

$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);


// $pdf->Cell(48,12,$header['Field'],1);
foreach($header as $heading) {
// $pdf->Cell(48,12,$display_heading[$heading['Field']],1,0,'C');
$pdf->Cell(48,12,$display_heading[$heading['Field']],1,0,'C');
// $pdf->Cell(20,12,$display_heading[$heading['Name']],1,0,'C');


}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(48,12,$column,1,0,'C');

}
$pdf->Output();
?>
