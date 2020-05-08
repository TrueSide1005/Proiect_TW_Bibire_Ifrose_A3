<?php

class Statistici extends Controller
{

    public function Martie2020()
    {

        if (isset($_POST['submit']) &&  $_POST['submit'] === 'Download') {
            $file = 'public/xml/Martie2020.xml';

            // We'll be outputting a PDF
            header('Content-Description: File Transfer');
            header('Content-Type: text/xml  charset="utf8"');
            // It will be called downloaded.pdf
            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
            header("Content-Transfer-Encoding: binary");
            //   header('Expires: 0');
            //  header('Cache-Control: must-revalidate');
            //  header('Pragma: public');
            // The PDF source is in original.pdf
            readfile('public/xml/Martie2020.xml');
        }
        $this->view('statistici/sMartie2020', []);
    }


    public function Februarie2020()
    {
        $this->view('statistici/sFebruarie2020', []);
    }
}
