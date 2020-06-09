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


public function Noiembrie2019()
    {
        if (isset($_POST['ExportRata'])) {

            switch ($_POST['ExportRata']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "rataNoiembrie2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "rataNoiembrie2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "rataNoiembrie2019",  $criteriu = "numar-rata"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportVarste'])) {

            switch ($_POST['ExportVarste']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "varsteNoiembrie2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "varsteNoiembrie2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "varsteNoiembrie2019", $criteriu = "varste"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportMedii'])) {

            switch ($_POST['ExportMedii']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "mediiNoiembrie2019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "mediiNoiembrie019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "mediiNoiembrie2019", $criteriu = "medii"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportEducatie'])) {

            switch ($_POST['ExportEducatie']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "educatieNoiembrie2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "educatieNoiembrie2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "educatieNoiembrie2019", $criteriu = "educatie"]);
                    break;
                default:
                    break;
            }
        }

        $data = ["rataNoiembrie2019", "varsteNoiembrie2019", "mediiNoiembrie2019", "educatieNoiembrie2019"];
        $this->view('statistici/indexLuna', $data);
    }

public function Octombrie2019()
    {
        if (isset($_POST['ExportRata'])) {

            switch ($_POST['ExportRata']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "rataOctombrie2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "rataOctombrie2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "rataOctombrie2019",  $criteriu = "numar-rata"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportVarste'])) {

            switch ($_POST['ExportVarste']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "varsteOctombrie2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "varsteOctombrie2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "varsteOctombrie2019", $criteriu = "varste"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportMedii'])) {

            switch ($_POST['ExportMedii']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "mediiOctombrie2019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "mediiOctombrie019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "mediiOctombrie2019", $criteriu = "medii"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportEducatie'])) {

            switch ($_POST['ExportEducatie']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "educatieOctombrie2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "educatieOctombrie2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "educatieOctombrie2019", $criteriu = "educatie"]);
                    break;
                default:
                    break;
            }
        }

        $data = ["rataOctombrie2019", "varsteOctombrie2019", "mediiOctombrie2019", "educatieOctombrie2019"];
        $this->view('statistici/indexLuna', $data);
    }
public function Septembrie2019()
    {
        if (isset($_POST['ExportRata'])) {

            switch ($_POST['ExportRata']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "rataSeptembrie2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "rataSeptembrie2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "rataSeptembrie2019",  $criteriu = "numar-rata"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportVarste'])) {

            switch ($_POST['ExportVarste']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "varsteSeptembrie2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "varsteSeptembrie2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "varsteSeptembrie2019", $criteriu = "varste"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportMedii'])) {

            switch ($_POST['ExportMedii']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "mediiSeptembrie2019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "mediiSeptembrie019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "mediiSeptembrie2019", $criteriu = "medii"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportEducatie'])) {

            switch ($_POST['ExportEducatie']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "educatieSeptembrie2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "educatieSeptembrie2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "educatieSeptembrie2019", $criteriu = "educatie"]);
                    break;
                default:
                    break;
            }
        }

        $data = ["rataSeptembrie2019", "varsteSeptembrie2019", "mediiSeptembrie2019", "educatieSeptembrie2019"];
        $this->view('statistici/indexLuna', $data);
    }
public function August2019()
    {
        if (isset($_POST['ExportRata'])) {

            switch ($_POST['ExportRata']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "rataAugust2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "rataAugust2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "rataAugust2019",  $criteriu = "numar-rata"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportVarste'])) {

            switch ($_POST['ExportVarste']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "varsteAugust2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "varsteAugust2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "varsteAugust2019", $criteriu = "varste"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportMedii'])) {

            switch ($_POST['ExportMedii']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "mediiAugust2019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "mediiAugust2019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "mediiAugust2019", $criteriu = "medii"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportEducatie'])) {

            switch ($_POST['ExportEducatie']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "educatieAugust2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "educatieAugust2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "educatieAugust2019", $criteriu = "educatie"]);
                    break;
                default:
                    break;
            }
        }

        $data = ["rataAugust2019", "varsteAugust2019", "mediiAugust2019", "educatieAugust2019"];
        $this->view('statistici/indexLuna', $data);
    }

public function Iulie2019()
    {
        if (isset($_POST['ExportRata'])) {

            switch ($_POST['ExportRata']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "rataIulie2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "rataIulie2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "rataIulie2019",  $criteriu = "numar-rata"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportVarste'])) {

            switch ($_POST['ExportVarste']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "varsteIulie2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "varsteIulie2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "varsteIulie2019", $criteriu = "varste"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportMedii'])) {

            switch ($_POST['ExportMedii']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "mediiIulie2019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "mediiIulie2019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "mediiIulie2019", $criteriu = "medii"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportEducatie'])) {

            switch ($_POST['ExportEducatie']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "educatieIulie2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "educatieIulie2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "educatieIulie2019", $criteriu = "educatie"]);
                    break;
                default:
                    break;
            }
        }

        $data = ["rataIulie2019", "varsteIulie2019", "mediiIulie2019", "educatieIulie2019"];
        $this->view('statistici/indexLuna', $data);
    }

public function Iunie2019()
    {
        if (isset($_POST['ExportRata'])) {

            switch ($_POST['ExportRata']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "rataIunie2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "rataIunie2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "rataIunie2019",  $criteriu = "numar-rata"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportVarste'])) {

            switch ($_POST['ExportVarste']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "varsteIunie2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "varsteIunie2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "varsteIunie2019", $criteriu = "varste"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportMedii'])) {

            switch ($_POST['ExportMedii']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "mediiIunie2019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "mediiIunie2019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "mediiIunie2019", $criteriu = "medii"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportEducatie'])) {

            switch ($_POST['ExportEducatie']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "educatieIunie2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "educatieIunie2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "educatieIunie2019", $criteriu = "educatie"]);
                    break;
                default:
                    break;
            }
        }

        $data = ["rataIunie2019", "varsteIunie2019", "mediiIunie2019", "educatieIunie2019"];
        $this->view('statistici/indexLuna', $data);
    }

public function Mai2019()
    {
        if (isset($_POST['ExportRata'])) {

            switch ($_POST['ExportRata']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "rataMai2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "rataMai2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "rataMai2019",  $criteriu = "numar-rata"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportVarste'])) {

            switch ($_POST['ExportVarste']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "varsteMai2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "varsteMai2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "varsteMai2019", $criteriu = "varste"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportMedii'])) {

            switch ($_POST['ExportMedii']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "mediiMai2019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "mediiMai2019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "mediiMai2019", $criteriu = "medii"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportEducatie'])) {

            switch ($_POST['ExportEducatie']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "educatieMai2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "educatieMai2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "educatieMai2019", $criteriu = "educatie"]);
                    break;
                default:
                    break;
            }
        }

        $data = ["rataMai2019", "varsteMai2019", "mediiMai2019", "educatieMai2019"];
        $this->view('statistici/indexLuna', $data);
    }

public function Aprilie2019()
    {
        if (isset($_POST['ExportRata'])) {

            switch ($_POST['ExportRata']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "rataAprilie2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "rataAprilie2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "rataAprilie2019",  $criteriu = "numar-rata"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportVarste'])) {

            switch ($_POST['ExportVarste']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "varsteAprilie2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "varsteAprilie2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "varsteAprilie2019", $criteriu = "varste"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportMedii'])) {

            switch ($_POST['ExportMedii']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "mediiAprilie2019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "mediiAprilie2019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "mediiAprilie2019", $criteriu = "medii"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportEducatie'])) {

            switch ($_POST['ExportEducatie']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "educatieAprilie2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "educatieAprilie2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "educatieAprilie2019", $criteriu = "educatie"]);
                    break;
                default:
                    break;
            }
        }

        $data = ["rataAprilie2019", "varsteAprilie2019", "mediiAprilie2019", "educatieAprilie2019"];
        $this->view('statistici/indexLuna', $data);
    }

public function Martie2019()
    {
        if (isset($_POST['ExportRata'])) {

            switch ($_POST['ExportRata']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "rataMartie2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "rataMartie2019",  $criteriu = "numar-rata"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "rataMartie2019",  $criteriu = "numar-rata"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportVarste'])) {

            switch ($_POST['ExportVarste']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "varsteMartie2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "varsteMartie2019", $criteriu = "varste"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "varsteMartie2019", $criteriu = "varste"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportMedii'])) {

            switch ($_POST['ExportMedii']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "mediiMartie2019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "mediiMartie2019", $criteriu = "medii"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "mediiMartie2019", $criteriu = "medii"]);
                    break;
                default:
                    break;
            }
        }

        if (isset($_POST['ExportEducatie'])) {

            switch ($_POST['ExportEducatie']) {
                case 'Descărcare-XML':
                    $this->model('XML', [$data = "educatieMartie2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-CSV':
                    $this->model('CSV', [$data = "educatieMartie2019", $criteriu = "educatie"]);
                    break;
                case 'Descărcare-PDF':
                    $this->model('PDF', [$data = "educatieMartie2019", $criteriu = "educatie"]);
                    break;
                default:
                    break;
            }
        }

        $data = ["rataMartie2019", "varsteMartie2019", "mediiMartie2019", "educatieMartie2019"];
        $this->view('statistici/indexLuna', $data);
    }
}