<?php

//global $conn;
class XML
{
    public $conn;
    public function __construct($data, $criteriu)
    {

        //echo $tabel;
        require __DIR__ . '/../config.php';

        $query = "SELECT * FROM   " . $data . " "; 
     
        $dataArray = array();
        if ($result =  mysqli_query($conn, $query)) {

            /* fetch associative array */
            while ($row = $result->fetch_assoc()) {

                array_push($dataArray, $row);
                //print_r($row);
            }

            if (count($dataArray)) {

                $this->createXMLfileRata($dataArray, $criteriu);
            }

            /* free result set */
            $result->free();
        }

        /* close connection */
        $this->conn->close();
    }



    function createXMLfileRata($dataArray, $criteriu)
    {
        //echo $tabel;
        if ($criteriu == "varste") {
            $filePath = 'somaj-pe-varste.xml';

            $dom     = new DOMDocument('1.0', 'utf-8');
            $root      = $dom->createElement('raport');

            for ($i = 0; $i < count($dataArray); $i++) {

                $denumire   =  $dataArray[$i]['Judet'];
                $sub25   =  $dataArray[$i]['sub25'];
                $nrTotal     =  $dataArray[$i]['intre_25_29'];
                $nrFemei   =  $dataArray[$i]['intre_30_39'];
                $nrBarbati    =  $dataArray[$i]['intre_40_49'];
                $nrIndem     =  $dataArray[$i]['intre_50_55'];
                $nrNeidem  =  $dataArray[$i]['peste55'];


                $book = $dom->createElement('judet');

                $name     = $dom->createElement('denumire', $denumire);

                $book->appendChild($name);
                $nr   = $dom->createElement('sub25', $sub25);

                $book->appendChild($nr);

                $nr   = $dom->createElement('intre25si29', $nrTotal);

                $book->appendChild($nr);

                $nrF    = $dom->createElement('intre30si39', $nrFemei);

                $book->appendChild($nrF);

                $nrB    = $dom->createElement('intre40si49', $nrBarbati);

                $book->appendChild($nrB);

                $nrIdemn = $dom->createElement('intre50si55', $nrIndem);

                $book->appendChild($nrIdemn);


                $nrNeidemn = $dom->createElement('peste55', $nrNeidem);

                $book->appendChild($nrNeidemn);


                $root->appendChild($book);
            }

            $dom->appendChild($root);
        }
        elseif($criteriu == "medii") {
            $filePath = 'medii.xml';

            $dom     = new DOMDocument('1.0', 'utf-8');

            $root      = $dom->createElement('raport');

            for ($i = 0; $i < count($dataArray); $i++) {

                $denumire   =  $dataArray[$i]['Judet'];

                $set1    =  $dataArray[$i]['nr_urban'];

                $set2   =  $dataArray[$i]['nr_femei_urban'];

                $set3   =  $dataArray[$i]['nr_barbati_urban'];

                $set4     =  $dataArray[$i]['nr_rural'];

                $set5 =  $dataArray[$i]['nr_femei_rural'];

                $set6   =  $dataArray[$i]['nr_barbati_rural'];

                $book = $dom->createElement('judet');


                $name     = $dom->createElement('denumire', $denumire);

                $book->appendChild($name);

                $nr   = $dom->createElement('nr_urban', $set1);

                $book->appendChild($nr);

                $nrF    = $dom->createElement('nr_femei_urban', $set2);

                $book->appendChild($nrF);

                $nrB    = $dom->createElement('nr_barbati_urban', $set3);

                $book->appendChild($nrB);

                $nrIdemn = $dom->createElement('nr_rural', $set4);

                $book->appendChild($nrIdemn);


                $nrNeidemn = $dom->createElement('nr_femei_rural', $set5);

                $book->appendChild($nrNeidemn);

                $rataTotal = $dom->createElement('nr_barbati_rural', $set6);

                $book->appendChild($rataTotal);


                $root->appendChild($book);
            }

            $dom->appendChild($root);
        }

        elseif($criteriu == "educatie") {
            $filePath = 'educatie.xml';

            $dom     = new DOMDocument('1.0', 'utf-8');

            $root      = $dom->createElement('raport');

            for ($i = 0; $i < count($dataArray); $i++) {

                $denumire   =  $dataArray[$i]['Judet'];

                $set1     =  $dataArray[$i]['fara_studii'];

                $set2   =  $dataArray[$i]['invatamant_primar'];

                $set3   =  $dataArray[$i]['invatamant_gimnazial'];

                $set4    =  $dataArray[$i]['invatamant_liceal'];

                $set5  =  $dataArray[$i]['invatamant_postliceal'];

                $set6   =  $dataArray[$i]['invatamant_profesional'];

                $set7     =  $dataArray[$i]['invatamant_universitar'];


                $book = $dom->createElement('judet');


                $name     = $dom->createElement('denumire', $denumire);

                $book->appendChild($name);

                $nr   = $dom->createElement('fara_studii', $set1);

                $book->appendChild($nr);

                $nrF    = $dom->createElement('invatamant_primar', $set2);

                $book->appendChild($nrF);

                $nrB    = $dom->createElement('invatamant_gimnazial', $set3);

                $book->appendChild($nrB);

                $nrIdemn = $dom->createElement('invatamant_liceal', $set4);

                $book->appendChild($nrIdemn);


                $nrNeidemn = $dom->createElement('invatamant_postliceal', $set5);

                $book->appendChild($nrNeidemn);

                $rataTotal = $dom->createElement('invatamant_profesional', $set6);

                $book->appendChild($rataTotal);

                $RataF = $dom->createElement('invatamant_universitar', $set7);

                $book->appendChild($RataF);

                $root->appendChild($book);
            }

            $dom->appendChild($root);
        }

        elseif($criteriu == "numar-rata") {
            $filePath = 'numar-rata.xml';

            $dom     = new DOMDocument('1.0', 'utf-8');

            $root      = $dom->createElement('raport');

            for ($i = 0; $i < count($dataArray); $i++) {

                $denumire   =  $dataArray[$i]['Judet'];

                $nrTotal     =  $dataArray[$i]['NumarTotal'];

                $nrFemei   =  $dataArray[$i]['NumarFemei'];

                $nrBarbati    =  $dataArray[$i]['NumarBarbati'];

                $nrIndem     =  $dataArray[$i]['NumarIndemnizati'];

                $nrNeidem  =  $dataArray[$i]['NumarNeindemnizati'];

                $rataSom    =  $dataArray[$i]['Rata'];

                $rataSomF     =  $dataArray[$i]['RataFemei'];

                $rataSomM  =  $dataArray[$i]['RataBarbati'];

                $book = $dom->createElement('judet');


                $name     = $dom->createElement('denumire', $denumire);

                $book->appendChild($name);

                $nr   = $dom->createElement('numar_total', $nrTotal);

                $book->appendChild($nr);

                $nrF    = $dom->createElement('numar_femei', $nrFemei);

                $book->appendChild($nrF);

                $nrB    = $dom->createElement('numar_barbati', $nrBarbati);

                $book->appendChild($nrB);

                $nrIdemn = $dom->createElement('numar_indemnizati', $nrIndem);

                $book->appendChild($nrIdemn);


                $nrNeidemn = $dom->createElement('numar_neindemnizati', $nrNeidem);

                $book->appendChild($nrNeidemn);

                $rataTotal = $dom->createElement('rata', $rataSom);

                $book->appendChild($rataTotal);

                $RataF = $dom->createElement('rata_femei', $rataSomF);

                $book->appendChild($RataF);

                $rataBarbati = $dom->createElement('rata', $rataSomM);

                $book->appendChild($rataBarbati);


                $root->appendChild($book);
            }

            $dom->appendChild($root);
        }

        // $dom->save($filePath);

        // $file =    $GLOBALS['filePath'];

        header('Content-Description: File Transfer');
        header('Content-Type: text/xml  charset="utf8"');
        // It will be called downloaded.pdf
        header('Content-Disposition: attachment; filename="' . $filePath . '"');

        echo $dom->saveXML();

        exit;
    }
}
