<?php
//SHOW A DATABASE ON A PDF FILE
//CREATED BY: Carlos Vasquez S.
//E-MAIL: cvasquez@cvs.cl
//CVS TECNOLOGIA E INNOVACION
//SANTIAGO, CHILE

require('fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(-10,10,'Double Click',0,1,'R');
    //$this->Ln(20);
    //$this->Cell(-10,10,'Powered By :',0,1,'R');
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
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}


//Connect to your database
include("../../database_connection.php");

//Create a new PDF file
$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(92,-39,'Powered by :',0,1,'C');
//Ln();
$pdf->SetFont('Arial','B',15);
$pdf->Cell(150,50,'Last Chance Security Solution',0,1,'C');

$pdf->SetFont('Arial','',8);
$pdf->Cell(165,-39,'Shop No. 301, 1st floor, Unity Plaza, Colombo 04. Tel : +94 11 450 3469',0,1,'C');

$pdf->SetFont('Arial','B',8);
$pdf->Cell(190,48,'Head Office : No 30, 1st cross street, Colombo-11, Sri Lanka, Tel/Fax : +94 112 38 14 44',0,1,'C');

$pdf->SetFont('Arial','',8);
$pdf->Cell(147  ,-39,'Showrooms : Shop No 9, Central Plaza Complex, No. 614,',0,1,'C');
$pdf->Cell(160  ,47,'Maradana Road, Colombo -10, Sri Lanka, Tel/Fax: +94 112 67 67 69',0,1,'C');
$pdf->Cell(138  ,-40,'E-Mail : latest@sltnet.lk       Website : www.latest.lk',0,1,'C');



function BasicTable($header)
{
    // Header
    foreach($header as $col)
        $this->Cell(-40,200,$col,1);
    $this->Ln();
    // Data
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,$col,1);
        $this->Ln();
    }
}

//This is customer details table
$Y_Fields_Name_position = 55;
//Table position, under Fields Name
$Y_Table_Position = 61;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(232,232,232);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(18);
$pdf->Cell(70,6,'Invoice To',1,0,'L',1);
$pdf->Ln();

//Now show the 3 columns
$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(18);
$pdf->MultiCell(70,20,'',1);

$i = 0;
$pdf->SetY($Y_Table_Position);
// end of cutomer details table

//This is Date and invoice number table.
$Y_Fields_Name_position = 10;
//Table position, under Fields Name
$Y_Table_Position = 16;
$pdf->SetFillColor(232,232,232);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(140);
$pdf->Cell(30,6,'Date',1,0,'L',1);
$pdf->SetX(170);
$pdf->Cell(30,6,'Invoice No',1,0,'L',1);
$pdf->Ln();
//Now show the 3 columns
$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(140);
$pdf->MultiCell(30,8,'',1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(170);
$pdf->MultiCell(30,8,'',1);

$i = 0;
$pdf->SetY($Y_Table_Position);
// ENd of date and invoice number table


//This is the start of due date, PO no, Terms
$Y_Fields_Name_position = 55;
//Table position, under Fields Name
$Y_Table_Position = 61;
$pdf->SetFillColor(232,232,232);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(110);
$pdf->Cell(30,6,'Due Date',1,0,'L',1);
$pdf->SetX(140);
$pdf->Cell(30,6,'P.O.No',1,0,'L',1);
$pdf->SetX(170);
$pdf->Cell(30,6,'Terms',1,0,'L',1);
$pdf->Ln();
//Now show the 3 columns
$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(110);
$pdf->MultiCell(30,8,'',1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(140);
$pdf->MultiCell(30,8,'',1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(170);
$pdf->MultiCell(30,8,'',1);

$i = 0;
$pdf->SetY($Y_Table_Position);
//This is the end of due date, PO no, Terms


//This is ths start of item description table
$Y_Fields_Name_position = 90;
//Table position, under Fields Name
$Y_Table_Position = 97;
$Z_Table_Position = 227;
$A_Table_Position = 237;
$B_Table_Position = 243;
$C_Table_Position = 265;
$D_Table_Position = 268;

$pdf->SetFillColor(232,232,232);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(18);
$pdf->Cell(20,6,'Qty',1,0,'L',1);
$pdf->SetX(38);
$pdf->Cell(50,6,'Item',1,0,'L',1);
$pdf->SetX(88);
$pdf->Cell(52,6,'Item Description',1,0,'L',1);
$pdf->SetX(140);
$pdf->Cell(30,6,'Rate',1,0,'L',1);
$pdf->SetX(170);
$pdf->Cell(30,6,'Amount',1,0,'L',1);
$pdf->Ln();
//Now show the 3 columns
$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(18);
$pdf->MultiCell(20,130,'',1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(38);
$pdf->MultiCell(50,130,'',1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(88);
$pdf->MultiCell(52,130,'',1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(140);
$pdf->MultiCell(30,130,'',1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(170);
$pdf->MultiCell(30,130,'',1);

$pdf->SetFont('Arial','B',12);
$pdf->SetY($Z_Table_Position);
$pdf->SetX(140);
$pdf->MultiCell(30,8,'Total',1, 'C');
$pdf->SetY($Z_Table_Position);
$pdf->SetX(170);
$pdf->MultiCell(30,8,'',1);


//$i = 0;
//$pdf->SetY($Y_Table_Position);
$pdf->SetTextColor(194,8,8);
$pdf->SetFont('Arial','',8);
$pdf->SetY($A_Table_Position);
$pdf->SetX(16);
$pdf->MultiCell(200,8,'Note : No Warrenty for Physical Damage, Burn Mark on the Chip or Board, Damages from Lightning (Chip Burn) ',0, '');

$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',9);
$pdf->SetY($B_Table_Position);
$pdf->SetX(16);
$pdf->MultiCell(200,8,'Cheques to be drawn in favour of',0, '');
$pdf->SetFont('Arial','B',9);
$pdf->SetY($B_Table_Position);
$pdf->SetX(64);
$pdf->MultiCell(200,8,'"LAST CHANCE SOLUTION"',0, '');

$pdf->SetFont('Arial','',15);
$pdf->SetY($C_Table_Position);
$pdf->SetX(24);
$pdf->MultiCell(200,8,'-------------------------------',0, '');
$pdf->SetY($C_Table_Position);
$pdf->SetX(134);
$pdf->MultiCell(200,8,'-------------------------------',0, '');

$pdf->SetFont('Arial','',8);
$pdf->SetY($D_Table_Position);
$pdf->SetX(36);
$pdf->MultiCell(200,8,'Customer Signature',0, '');
$pdf->SetY($D_Table_Position);
$pdf->SetX(148);
$pdf->MultiCell(200,8,'Auhorized Signature',0, '');

//This is ths end of item description table

$pdf->Output();
?> 