<?php

class PDF
{
    public $conn;
    public function __construct($data, $criteriu) 
    {

        require __DIR__ . '/../config.php';

        require('/public/libs/fpdf182/fpdf.php');

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Ln();
        $pdf->Ln();
        $pdf->SetFont('times', 'B', 10);
        if ($criteriu == "numar-rata") {
            $pdf->Cell(20, 7, "Judet");
            $pdf->Cell(20, 7, "Nr. total");
            $pdf->Cell(25, 7, "Nr. Barbati");
            $pdf->Cell(25, 7, "Nr. Femei");
            $pdf->Cell(25, 7, "Indemnizati");
            $pdf->Cell(25, 7, "Neindemnizati");
            $pdf->Cell(10, 7, "Rata");
            $pdf->Cell(20, 7, "Rata Femei");
            $pdf->Cell(20, 7, "Rata Barbati");
        } elseif ($criteriu == "varste") {
            $pdf->Cell(35, 7, "Judet");
            $pdf->Cell(30, 7, "Sub25");
            $pdf->Cell(30, 7, "25-29");
            $pdf->Cell(25, 7, "30-39");
            $pdf->Cell(25, 7, "40-49");
            $pdf->Cell(25, 7, "50-55");
            $pdf->Cell(10, 7, "Peste55");
        } elseif ($criteriu == "medii") {
            $pdf->Cell(30, 7, "Judet");
            $pdf->Cell(25, 7, "Nr. Urban");
            $pdf->Cell(25, 7, "Nr. Urban F.");
            $pdf->Cell(30, 7, "Nr. Urban B.");
            $pdf->Cell(25, 7, "Nr. Rural");
            $pdf->Cell(25, 7, "Nr. Rural F.");
            $pdf->Cell(10, 7, "Nr. Rural B.");
        } elseif ($criteriu == "educatie") {
            $pdf->Cell(30, 7, "Judet");
            $pdf->Cell(30, 7, "Fara studii");
            $pdf->Cell(20, 7, "Primar");
            $pdf->Cell(25, 7, "Gimnazial");
            $pdf->Cell(20, 7, "Liceal");
            $pdf->Cell(25, 7, "Postliceal");
            $pdf->Cell(20, 7, "Profesional");
            $pdf->Cell(20, 7, "Universitar");
        }


        $pdf->Ln();
        $pdf->Cell(450, 7, "----------------------------------------------------------------------------------------------------------------------------------------------------------------------");
        $pdf->Ln();


        $sql = "SELECT * FROM " . $data . " ";
        $result = mysqli_query($conn, $sql);

        while ($rows = mysqli_fetch_array($result)) {
            if ($criteriu == "numar-rata") {
                $jud = $rows[0];
                $total = $rows[1];
                $total_F = $rows[2];
                $total_B = $rows[3];
                $nr_idem = $rows[4];
                $nr_neidem = $rows[5];
                $rata = $rows[6];
                $rata_F = $rows[7];
                $rata_B = $rows[8];


                $pdf->Cell(30, 7, $jud);
                $pdf->Cell(25, 7, $total);
                $pdf->Cell(20, 7, $total_F);
                $pdf->Cell(20, 7, $total_B);
                $pdf->Cell(25, 7, $nr_idem);
                $pdf->Cell(20, 7, $nr_neidem);
                $pdf->Cell(20, 7, $rata);
                $pdf->Cell(20, 7, $rata_F);
                $pdf->Cell(20, 7, $rata_B);
            }


            if ($criteriu == "varste") {
                $jud = $rows[0];
                $sub25 = $rows[1];
                $intre25_29 = $rows[2];
                $intre30_39 = $rows[3];
                $intre40_49 = $rows[4];
                $intre50_55= $rows[5];
                $peste55 = $rows[6];

                $pdf->Cell(35, 7, $jud);
                $pdf->Cell(30, 7, $sub25);
                $pdf->Cell(30, 7, $intre25_29);
                $pdf->Cell(25, 7, $intre30_39);
                $pdf->Cell(25, 7, $intre40_49);
                $pdf->Cell(25, 7, $intre50_55);
                $pdf->Cell(20, 7,  $peste55);
            }
            if ($criteriu == "medii") {
                $jud = $rows[0];
                $total_urban = $rows[1];
                $total_F_U = $rows[2];
                $total_B_U = $rows[3];
                $total_rural = $rows[4];
                $total_F_R = $rows[5];
                $total_B_R = $rows[6];

                $pdf->Cell(35, 7, $jud);
                $pdf->Cell(25, 7,  $total_urban);
                $pdf->Cell(25, 7,  $total_F_U);
                $pdf->Cell(30, 7, $total_B_U);
                $pdf->Cell(25, 7,  $total_rural);
                $pdf->Cell(25, 7, $total_F_R);
                $pdf->Cell(20, 7,  $total_B_R);
            }
            if ($criteriu == "educatie") {
                $jud = $rows[0];
                $fara_studii = $rows[1];
                $nivel_primar = $rows[2];
                $nivel_gimnazial = $rows[3];
                $nivel_liceal = $rows[4];
                $nivel_postliceal = $rows[5];
                $nivel_profesional = $rows[6];
                $nivel_universitar = $rows[7];

                $pdf->Cell(35, 7, $jud);
                $pdf->Cell(28, 7, $fara_studii);
                $pdf->Cell(20, 7, $nivel_primar);
                $pdf->Cell(23, 7, $nivel_gimnazial);
                $pdf->Cell(25, 7, $nivel_liceal);
                $pdf->Cell(25, 7, $nivel_postliceal);
                $pdf->Cell(20, 7, $nivel_profesional);
                $pdf->Cell(20, 7, $nivel_universitar);
            }
            $pdf->Ln();
        }
        $pdf->Output();
    }
}
