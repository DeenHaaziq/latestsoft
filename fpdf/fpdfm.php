<?php
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
    $this->Cell(30,10,'Title',1,0,'C');
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
include("../database_connection.php");

//Select the Products you want to show in your PDF file
//$result=mysql_query("select code,description,unitprice from item ORDER BY code")
//$number_of_item = mysql_num_rows($result);

$list_categories2 = "SELECT item_code,item_description,item_unitprice FROM item;";
$query_run2 = mysql_query($list_categories2);
      $rows=mysql_num_rows($query_run2);

//Initialize the 3 columns and the total
$column_code = "";
$column_description = "";
$column_unitprice = "";
//$total = 0;

//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($query_run2))
{
    $code = $row["item_code"];
    $description = substr($row["item_description"],0,20);
    $unitprice = $row["item_unitprice"];
    //$price_to_show = number_format($row["price"],',','.','.');

    $column_code = $column_code.$code."\n";
    $column_description = $column_description.$description."\n";
    $column_unitprice = $column_unitprice.$unitprice."\n";

    //Sum all the Prices (TOTAL)
    //$total = $total+$real_price;
}
mysql_close();

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
//Fields Name position
$Y_Fields_Name_position = 20;
//Table position, under Fields Name
$Y_Table_Position = 26;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(232,232,232);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(45);
$pdf->Cell(20,6,'CODE',1,0,'L',1);
$pdf->SetX(65);
$pdf->Cell(100,6,'DESCRIPTION',1,0,'L',1);
$pdf->SetX(135);
$pdf->Cell(30,6,'UNITPRICE',1,0,'R',1);
$pdf->Ln();

//Now show the 3 columns
$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(45);
$pdf->MultiCell(20,6,$column_code,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(65);
$pdf->MultiCell(100,6,$column_description,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(135);
$pdf->MultiCell(30,6,$column_unitprice,1,'R');
$pdf->SetX(135);
//$pdf->MultiCell(30,6,'$ '.$total,1,'R');

//Create lines (boxes) for each ROW (Product)
//If you don't use the following code, you don't create the lines separating each row
$i = 0;
$pdf->SetY($Y_Table_Position);
//while ($i < $number_of_products)
//{
//  $pdf->SetX(45);
//  $pdf->MultiCell(120,6,'',1);
//  $i = $i +1;
//}

$pdf->Output();
?>