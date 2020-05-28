<?php

class Statistici extends Controller
{

    public function index()
    {
       
    }
    public function StatisticiCartografice()
    {
        $this->view('statistici/statisticiCartografice', []);
    }
    public function Martie2020()
    {
        

     
        if (isset($_POST['ExportRata']) &&  $_POST['ExportRata'] === 'Download-XML') {
            //$file = 'public/xml/Martie2020.xml';
           // require_once __DIR__ . '/../models/XML.php';

            $this->model('XML', [$tabel="rataMartie2020"]);


           
          //  $file =    $GLOBALS['filePath'];
            // We'll be outputting a PDF
           // header('Content-Description: File Transfer');
          //  header('Content-Type: text/xml  charset="utf8"');
            // It will be called downloaded.pdf
           // header('Content-Disposition: attachment; filename="' . basename($file) . '"');
           // header("Content-Transfer-Encoding: binary");
            //   header('Expires: 0');
            //  header('Cache-Control: must-revalidate');
            //  header('Pragma: public');
            // The PDF source is in original.pdf
           // echo $file;
           // readfile($file);
        }

        if (isset($_POST['ExportRata']) &&  $_POST['ExportRata'] === 'Download-CSV') {

            $this->model('CSV', []);
      
        }

        if (isset($_POST['ExportRata']) &&  $_POST['ExportRata'] === 'Download-PDF') {

            $this->model('PDF', []);
      
        }


        //$this->model('chart', [$tabel="rataMartie2020"]);


        $this->view('statistici/sMartie2020', []);
    }



    public function Februarie2020()
    {
        $this->view('statistici/sFebruarie2020', []);
    }
}
