<?php

//global $conn;
class XML
{
    public $conn;
    public function __construct($tabel)
    {
     
        //echo $tabel;
        require __DIR__ . '/../config.php';


        $query = "SELECT Judet, NumarTotal, NumarFemei, NumarBarbati, NumarIndemnizati, NumarNeindemnizati, Rata, RataFemei, 
                    RataBarbati FROM   " . $tabel . " ";

        $booksArray = array();

        if ($result =  mysqli_query($conn, $query)) {

            /* fetch associative array */
            while ($row = $result->fetch_assoc()) {

                array_push($booksArray, $row);
            }

            if (count($booksArray)) {

                $this->createXMLfile($booksArray);
            }

            /* free result set */
            $result->free();
        }

        /* close connection */
        $this->conn->close();
    }



    function createXMLfile($booksArray)
    {
        //echo $tabel;
        $filePath = 'rataMartie2020.xml';

        $dom     = new DOMDocument('1.0', 'utf-8');

        $root      = $dom->createElement('raport');

        for ($i = 0; $i < count($booksArray); $i++) {

            $denumire   =  $booksArray[$i]['Judet'];

            $nrTotal     =  $booksArray[$i]['NumarTotal'];

            $nrFemei   =  $booksArray[$i]['NumarFemei'];

            $nrBarbati    =  $booksArray[$i]['NumarBarbati'];

            $nrIndem     =  $booksArray[$i]['NumarIndemnizati'];

            $nrNeidem  =  $booksArray[$i]['NumarNeindemnizati'];

            $rataSom    =  $booksArray[$i]['Rata'];

            $rataSomF     =  $booksArray[$i]['RataFemei'];

            $rataSomM  =  $booksArray[$i]['RataBarbati'];

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
