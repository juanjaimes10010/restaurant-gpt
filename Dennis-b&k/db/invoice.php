<?php

require("../lib/pdf/fpdf.php");
// Establish a connection to the MySQL database
require_once "credentials.php";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement to retrieve the order details
$stmt = $conn->prepare("SELECT menu_item, price, quantity, (price * quantity) AS total FROM orders WHERE id = ?");

// Bind the parameter to the statement
$order_id = 123;
$stmt->bind_param("i", $order_id);

// Execute the statement
$stmt->execute();

// Bind the result variables to the statement
$stmt->bind_result($menu_item, $price, $quantity, $total);

// Set the header for the invoice
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="invoice.pdf"');

// Create a new PDF document using a library like TCPDF or FPDF
$pdf = new FPDF();

// Add a page to the PDF document
$pdf->AddPage();

// Output the invoice details
$pdf->SetFont('Helvetica', 'B', 16);
$pdf->Cell(0, 10, 'Invoice', 0, 1, 'C');
$pdf->Ln();

$pdf->SetFont('Helvetica', 'B', 12);
$pdf->Cell(50, 10, 'Menu Item', 1, 0, 'C');
$pdf->Cell(30, 10, 'Price', 1, 0, 'C');
$pdf->Cell(30, 10, 'Quantity', 1, 0, 'C');
$pdf->Cell(40, 10, 'Total', 1, 1, 'C');

$pdf->SetFont('Helvetica', '', 12);
while ($stmt->fetch()) {
  $pdf->Cell(50, 10, $menu_item, 1, 0, 'L');
  $pdf->Cell(30, 10, '$' . number_format($price, 2), 1, 0, 'R');
  $pdf->Cell(30, 10, $quantity, 1, 0, 'C');
  $pdf->Cell(40, 10, '$' . number_format($total, 2), 1, 1, 'R');
}

// Output the total amount due
$pdf->Ln();
$pdf->Cell(0, 10, 'Total Amount Due: $' . number_format($total, 2), 0, 1, 'R');

// Output the PDF document
$pdf->Output();

// Close the statement and database connection
$stmt->close();
$conn->close();
