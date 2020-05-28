<?php



global $conn;

require __DIR__ . '/../config.php';



require ('C:\xampp\htdocs\twApp\public\libs\fpdf182\fpdf.php');

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('times','B',10);
$pdf->Cell(25,7,"Judet");
$pdf->Cell(20,7,"Nr. total");
$pdf->Cell(25,7,"Nr. Barbati");
$pdf->Cell(25,7,"Nr. Femei");
$pdf->Cell(25,7,"Indemnizati");
$pdf->Cell(25,7,"Neindemnizati");
$pdf->Cell(10,7,"Rata");
$pdf->Cell(20,7,"Rata Femei");
$pdf->Cell(20,7,"Rata Barbati");


$pdf->Ln();
$pdf->Cell(450,7,"----------------------------------------------------------------------------------------------------------------------------------------------------------------------");
$pdf->Ln();

   
        $sql = "SELECT * FROM ratamartie2020";
        $result = mysqli_query($conn, $sql);

        while($rows=mysqli_fetch_array($result))
        {
            $jud = $rows[0];
            $total = $rows[1];
            $total_F = $rows[2];
            $total_B = $rows[3];
            $nr_idem = $rows[4];
            $nr_neidem = $rows[5];
            $rata = $rows[6];
            $rata_F = $rows[7];
            $rata_B = $rows[8];
          

            $pdf->Cell(30,7,$jud);
            $pdf->Cell(25,7,$total);
            $pdf->Cell(20,7,$total_F);
            $pdf->Cell(20,7,$total_B);
            $pdf->Cell(25,7,$nr_idem);
            $pdf->Cell(20,7,$nr_neidem); 
            $pdf->Cell(20,7,$rata); 
            $pdf->Cell(20,7,$rata_F);
            $pdf->Cell(20,7,$rata_B);
            $pdf->Ln(); 
        }
$pdf->Output();
?>