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
        if (isset($_POST['ExportRata'])) {

            switch ($_POST['ExportRata']) { 
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "rataMartie2020", $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "rataMartie2020", $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "rataMartie2020", $criteriu = "numar-rata"]);
                    break;
                default:
                    break;
            }
        }
        
        if (isset($_POST['ExportVarste'])) {

            switch ($_POST['ExportVarste']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "varsteMartie2020", $criteriu = "varste"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "varsteMartie2020", $criteriu = "varste"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "varsteMartie2020", $criteriu = "varste"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportMedii'])) {

            switch ($_POST['ExportMedii']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "mediimartie2020", $criteriu = "medii"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "mediiMartie2020", $criteriu = "medii"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "mediiMartie2020", $criteriu = "medii"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportEducatie'])) {

            switch ($_POST['ExportEducatie']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "educatieMartie2020", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "educatieMartie2020", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "educatieMartie2020", $criteriu = "educatie"]);
                    break;
                default:
                    break;
            }
        }

        $data = ["rataMartie2020", "varsteMartie2020", "mediiMartie2020", "educatieMartie2020"];
        $this->view('statistici/indexLuna', $data);
       
    }

    public function Februarie2020()
    {
        if (isset($_POST['ExportRata'])) {

            switch ($_POST['ExportRata']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "rataFebruarie2020",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "rataFebruarie2020",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "rataFebruarie2020",  $criteriu = "numar-rata"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportVarste'])) {

            switch ($_POST['ExportVarste']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "varsteFebruarie2020", $criteriu = "varste"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "varsteFebruarie2020", $criteriu = "varste"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "varsteFebruarie2020", $criteriu = "varste"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportMedii'])) {

            switch ($_POST['ExportMedii']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "mediiFebruarie2020", $criteriu = "medii"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "mediiFebruarie2020", $criteriu = "medii"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "mediiFebruarie2020", $criteriu = "medii"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportEducatie'])) {

            switch ($_POST['ExportEducatie']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "educatieFebruarie2020", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "educatieFebruarie2020", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "educatieFebruarie2020", $criteriu = "educatie"]);
                    break;
                default:
                    break;
            }
        }

        $data = ["rataFebruarie2020", "varsteFebruarie2020", "mediiFebruarie2020", "educatieFebruarie2020"];
        $this->view('statistici/indexLuna', $data);
    }


    public function Ianuarie2020()
    {
        if (isset($_POST['ExportRata'])) {

            switch ($_POST['ExportRata']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "rataIanuarie2020",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "rataIanuarie2020",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "rataIanuarie2020",  $criteriu = "numar-rata"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportVarste'])) {

            switch ($_POST['ExportVarste']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "varsteIanuarie2020", $criteriu = "varste"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "varsteIanuarie2020", $criteriu = "varste"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "varsteIanuarie2020", $criteriu = "varste"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportMedii'])) {

            switch ($_POST['ExportMedii']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "mediiIanuarie2020", $criteriu = "medii"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "mediiIanuarie2020", $criteriu = "medii"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "mediiIanuarie2020", $criteriu = "medii"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportEducatie'])) {

            switch ($_POST['ExportEducatie']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "educatieIanuarie2020", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "educatieIanuarie2020", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "educatieIanuarie2020", $criteriu = "educatie"]);
                    break;
                default:
                    break;
            }
        }

        $data = ["rataIanuarie2020", "varsteIanuarie2020", "mediiIanuarie2020", "educatieIanuarie2020"];
        $this->view('statistici/indexLuna', $data);
    }

    public function Decembrie2019()
    {
        if (isset($_POST['ExportRata'])) {

            switch ($_POST['ExportRata']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "rataDecembrie2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "rataDecembrie2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "rataDecembrie2019",  $criteriu = "numar-rata"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportVarste'])) {

            switch ($_POST['ExportVarste']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "varsteDecembrie2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "varsteDecembrie2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "varsteDecembrie2019", $criteriu = "varste"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportMedii'])) {

            switch ($_POST['ExportMedii']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "mediiDecembrie2019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "mediiDecembrie2019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "mediiDecembrie2019", $criteriu = "medii"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportEducatie'])) {

            switch ($_POST['ExportEducatie']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "educatieDecembrie2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "educatieDecembrie2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "educatieDecembrie2019", $criteriu = "educatie"]);
                    break;
                default:
                    break;
            }
        }

        $data = ["rataDecembrie2019", "varsteDecembrie2019", "mediiDecembrie2019", "educatieDecembrie2019"];
        $this->view('statistici/indexLuna', $data);
    }
}
