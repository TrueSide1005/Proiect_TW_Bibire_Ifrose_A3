<?php

session_start();

class Response
{
    static function status($code)
    {
        http_response_code($code);
    }

    static function json($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}


//posibile routes for unemployment and their handler
$monthStatisticsRoutes = [
    [
        "method" => "GET",
        "middlewares" => ["IsLoggedIn"],
        "route" => "statistics/:month/numarul-si-rata",
        "handler" => "getMonthStatisticsNumberRate"
    ],


    [
        "method" => "GET",
        "middlewares" => ["IsLoggedIn"],
        "route" => "statistics/:month/varste",
        "handler" => "getVarsteStatistics"
    ],

    [
        "method" => "GET",
        "middlewares" => ["IsLoggedIn"],
        "route" => "statistics/:month/medii",
        "handler" => "getMediiStatistics"
    ],

    [
        "method" => "GET",
        "middlewares" => ["IsLoggedIn"], 
        "route" => "statistics/:month/educatie",
        "handler" => "getEducatieStatistics"
    ],

    [
        "method" => "GET",
        "middlewares" => ["IsLoggedIn"],
        "route" => "statistics/:month/numarul-si-rata/:city",   
        "handler" => "getCityMonthStatistics"
    ],

    [
        "method" => "GET",
        "middlewares" => ["IsLoggedIn"],
        "route" => "statistics/:month/varste/:item-varsta",
        "handler" => "getItemVarsteStatistics"
    ],

    [
        "method" => "GET",
        "middlewares" => ["IsLoggedIn"],
        "route" => "statistics/:month/judet-varste/:city",
        "handler" => "getCityAgeStatistics"
    ],

    [
        "method" => "GET",
        "middlewares" => ["IsLoggedIn"],
        "route" => "statistics/:month/judet-medii/:city",  
        "handler" => "getCityMediiMonthStatistics"
    ],


    [
        "method" => "GET",
        "middlewares" => ["IsLoggedIn"],
        "route" => "statistics/:month/medii/:item-mediu",
        "handler" => "getItemMediiStatistics"
    ],

    [
        "method" => "GET",
        "middlewares" => ["IsLoggedIn"],
        "route" => "statistics/:month/educatie/:item-educatie",
        "handler" => "getItemEducatieStatistics"
    ],

    [
        "method" => "GET",
        "middlewares" => ["IsLoggedIn"],
        "route" => "statistics/:month/judet-educatie/:city",
        "handler" => "getCityEducatieStatistics"
    ]
];


$conn = null;
require __DIR__ . '/../config.php';


function getMonthStatisticsNumberRate($req)
{
    Response::status(200);
    $tabel = "";
    $stm = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $tabel = "rataMartie2020";
            break;
        case 'februarie2020':
            $tabel = "rataFebruarie2020";
            break;
        case 'ianuarie2020':
            $tabel = "rataIanuarie2020";
            break;
        case 'decembrie2019':
            $tabel = "rataDecembrie2019";
            break;
        case 'noiembrie2019':
            $tabel = "rataNoiemvrie2019";
            break;
        case 'octombrie2019':
            $tabel = "rataOctombrie2019";
            break;
        case 'septembrie2019':
            $tabel = "rataSeptembrie2019";
            break;
        case 'august2019':
            $tabel = "rataAugust2019";
            break;
        case 'iulie2019':
            $tabel = "rataIulie2019";
            break;
        case 'iunie2019':
            $tabel = "rataIunie2019";
            break;
        case 'mai2019':
            $tabel = "rataMai2019";
            break;
        case 'aprilie2019':
            $tabel = "rataAprile2019";
            break;
        case 'martie2019':
            $tabel = "rataMartie019";
            break;
        default:
            $tabel = "404";
            break;
    }



    if ($tabel != "404") {

        $array = array("numartotal", "numarfemei", "numarbarbati", "numarindemnizati", "numarneindemnizati", "rata", "ratafemei", "ratabarbati");
        if (isset($_GET["sort"])) {           
                if (in_array($_GET["sort"], $array)) {

                    $stm .= "SELECT * FROM " . $tabel . " order by " . $_GET["sort"] . " ";
                } else {
                    handle404();
                    exit;
                }
            
        } elseif (isset($_GET["filter"])) {

          
            if (in_array($_GET["filter"], $array)) { 
                    $stm .= "SELECT  judet, " . $_GET["filter"]. " FROM " . $tabel . " ";
                } else {
                    handle404();
                    exit;
                }
            
        } else {
            $stm .= "SELECT * FROM " . $tabel . "";
        }

        $result = mysqli_query($GLOBALS['conn'], $stm);
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }

        Response::json($data);
    } else {
        handle404();
    }
}




function getItemMonthStatistics($req)
{
    Response::status(200);
    $tabel = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $tabel = "rataMartie2020";
            break;
        case 'februarie2020':
            $tabel = "rataFebruarie2020";
            break;
        case 'ianuarie2020':
            $tabel = "rataIanuarie2020";
            break;
        case 'decembrie2019':
            $tabel = "rataDecembrie2019";
            break;
        case 'noiembrie2019':
            $tabel = "rataNoiemvrie2019";
            break;
        case 'octombrie2019':
            $tabel = "rataOctombrie2019";
            break;
        case 'septembrie2019':
            $tabel = "rataSeptembrie2019";
            break;
        case 'august2019':
            $tabel = "rataAugust2019";
            break;
        case 'iulie2019':
            $tabel = "rataIulie2019";
            break;
        case 'iunie2019':
            $tabel = "rataIunie2019";
            break;
        case 'mai2019':
            $tabel = "rataMai2019";
            break;
        case 'aprilie2019':
            $tabel = "rataAprile2019";
            break;
        case 'martie2019':
            $tabel = "rataMartie019";
            break;
        default:
            $tabel = "404";
            break;
    }

    if ($tabel != "404") {
        $result = mysqli_query($GLOBALS['conn'], "SELECT judet, {$req['params']['item-rata']} FROM " . $tabel . " ");
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }

        Response::json($data);
    } else {
        handle404();
    }
}



function getCityMonthStatistics($req)
{
    Response::status(200);

    $tabel = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $tabel = "rataMartie2020";
            break;
        case 'februarie2020':
            $tabel = "rataFebruarie2020";
            break;
        case 'ianuarie2020':
            $tabel = "rataIanuarie2020";
            break;
        case 'decembrie2019':
            $tabel = "rataDecembrie2019";
            break;
        case 'noiembrie2019':
            $tabel = "rataNoiemvrie2019";
            break;
        case 'octombrie2019':
            $tabel = "rataOctombrie2019";
            break;
        case 'septembrie2019':
            $tabel = "rataSeptembrie2019";
            break;
        case 'august2019':
            $tabel = "rataAugust2019";
            break;
        case 'iulie2019':
            $tabel = "rataIulie2019";
            break;
        case 'iunie2019':
            $tabel = "rataIunie2019";
            break;
        case 'mai2019':
            $tabel = "rataMai2019";
            break;
        case 'aprilie2019':
            $tabel = "rataAprile2019";
            break;
        case 'martie2019':
            $tabel = "rataMartie019";
            break;
        default:
            $tabel = "404";
            break;
    }

    if ($tabel != "404") {

        $param = "{$req['params']['city']}";

        $stmt = $GLOBALS['conn']->prepare("SELECT * FROM " . $tabel . " WHERE  judet = ?");
        $stmt->bind_param('s', $param);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }

        Response::json($data);
    } else {
        handle404();
    }
}

function getCityAgeStatistics($req)
{
    Response::status(200);

    $tabel = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $tabel = "varsteMartie2020";
            break;
        case 'februarie2020':
            $tabel = "varsteFebruarie2020";
            break;
        case 'ianuarie2020':
            $tabel = "varsteIanuarie2020";
            break;
        case 'decembrie2019':
            $tabel = "varsteDecembrie2019";
            break;
        case 'noiembrie2019':
            $tabel = "varsteNoiemvrie2019";
            break;
        case 'octombrie2019':
            $tabel = "varsteOctombrie2019";
            break;
        case 'septembrie2019':
            $tabel = "varsteSeptembrie2019";
            break;
        case 'august2019':
            $tabel = "varsteAugust2019";
            break;
        case 'iulie2019':
            $tabel = "varsteIulie2019";
            break;
        case 'iunie2019':
            $tabel = "varsteIunie2019";
            break;
        case 'mai2019':
            $tabel = "varsteMai2019";
            break;
        case 'aprilie2019':
            $tabel = "varsteAprile2019";
            break;
        case 'martie2019':
            $tabel = "varsteMartie019";
            break;
        default:
            $tabel = "404";
            break;
    }

    if ($tabel != "404") {

        $param = "{$req['params']['city']}";

        $stmt = $GLOBALS['conn']->prepare("SELECT * FROM " . $tabel . " WHERE  judet = ?");
        $stmt->bind_param('s', $param);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }

        Response::json($data);
    } else {
        handle404();
    }
}

function getVarsteStatistics($req)
{
    Response::status(200);

    $tabel = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $tabel = "varsteMartie2020";
            break;
        case 'februarie2020':
            $tabel = "varsteFebruarie2020";
            break;
        case 'ianuarie2020':
            $tabel = "varsteIanuarie2020";
            break;
        case 'decembrie2019':
            $tabel = "varsteDecembrie2019";
            break;
        case 'noiembrie2019':
            $tabel = "varsteNoiemvrie2019";
            break;
        case 'octombrie2019':
            $tabel = "varsteOctombrie2019";
            break;
        case 'septembrie2019':
            $tabel = "varsteSeptembrie2019";
            break;
        case 'august2019':
            $tabel = "varsteAugust2019";
            break;
        case 'iulie2019':
            $tabel = "varsteIulie2019";
            break;
        case 'iunie2019':
            $tabel = "varsteIunie2019";
            break;
        case 'mai2019':
            $tabel = "varsteMai2019";
            break;
        case 'aprilie2019':
            $tabel = "varsteAprile2019";
            break;
        case 'martie2019':
            $tabel = "varsteMartie019";
            break;
        default:
            $tabel = "404";
            break;
    }
    if ($tabel != "404") {

        $result = mysqli_query($GLOBALS['conn'], "SELECT * FROM " . $tabel . " ");
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }

        Response::json($data);
    } else {
        handle404();
    }
}

function getItemVarsteStatistics($req)
{
    Response::status(200);
    $tabel = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $tabel = "varsteMartie2020";
            break;
        case 'februarie2020':
            $tabel = "varsteFebruarie2020";
            break;
        case 'ianuarie2020':
            $tabel = "varsteIanuarie2020";
            break;
        case 'decembrie2019':
            $tabel = "varsteDecembrie2019";
            break;
        case 'noiembrie2019':
            $tabel = "varsteNoiemvrie2019";
            break;
        case 'octombrie2019':
            $tabel = "varsteOctombrie2019";
            break;
        case 'septembrie2019':
            $tabel = "varsteSeptembrie2019";
            break;
        case 'august2019':
            $tabel = "varsteAugust2019";
            break;
        case 'iulie2019':
            $tabel = "varsteIulie2019";
            break;
        case 'iunie2019':
            $tabel = "varsteIunie2019";
            break;
        case 'mai2019':
            $tabel = "varsteMai2019";
            break;
        case 'aprilie2019':
            $tabel = "varsteAprile2019";
            break;
        case 'martie2019':
            $tabel = "varsteMartie019";
            break;
        default:
            $tabel = "404";
            break;
    }

    if ($tabel != "404") {
        $result = mysqli_query($GLOBALS['conn'], "SELECT judet, {$req['params']['item-varsta']} FROM " . $tabel . "");
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }

        Response::json($data);
    } else {
        handle404();
    }
}

function getMediiStatistics($req)
{
    Response::status(200);

    $tabel = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $tabel = "mediiMartie2020";
            break;
        case 'februarie2020':
            $tabel = "mediiFebruarie2020";
            break;
        case 'ianuarie2020':
            $tabel = "mediiIanuarie2020";
            break;
        case 'decembrie2019':
            $tabel = "mediiDecembrie2019";
            break;
        case 'noiembrie2019':
            $tabel = "mediiNoiemvrie2019";
            break;
        case 'octombrie2019':
            $tabel = "mediiOctombrie2019";
            break;
        case 'septembrie2019':
            $tabel = "mediiSeptembrie2019";
            break;
        case 'august2019':
            $tabel = "mediiAugust2019";
            break;
        case 'iulie2019':
            $tabel = "mediiIulie2019";
            break;
        case 'iunie2019':
            $tabel = "mediiIunie2019";
            break;
        case 'mai2019':
            $tabel = "mediiMai2019";
            break;
        case 'aprilie2019':
            $tabel = "mediiAprile2019";
            break;
        case 'martie2019':
            $tabel = "mediiMartie019";
            break;
        default:
            $tabel = "404";
            break;
    }

    if ($tabel != "404") {
        $result = mysqli_query($GLOBALS['conn'], "SELECT * FROM " . $tabel . "");
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }

        Response::json($data);
    } else {
        handle404();
    }
}

function getItemMediiStatistics($req)
{
    Response::status(200);


    $tabel = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $tabel = "mediiMartie2020";
            break;
        case 'februarie2020':
            $tabel = "mediiFebruarie2020";
            break;
        case 'ianuarie2020':
            $tabel = "mediiIanuarie2020";
            break;
        case 'decembrie2019':
            $tabel = "mediiDecembrie2019";
            break;
        case 'noiembrie2019':
            $tabel = "mediiNoiemvrie2019";
            break;
        case 'octombrie2019':
            $tabel = "mediiOctombrie2019";
            break;
        case 'septembrie2019':
            $tabel = "mediiSeptembrie2019";
            break;
        case 'august2019':
            $tabel = "mediiAugust2019";
            break;
        case 'iulie2019':
            $tabel = "mediiIulie2019";
            break;
        case 'iunie2019':
            $tabel = "mediiIunie2019";
            break;
        case 'mai2019':
            $tabel = "mediiMai2019";
            break;
        case 'aprilie2019':
            $tabel = "mediiAprile2019";
            break;
        case 'martie2019':
            $tabel = "mediiMartie019";
            break;
        default:
            $tabel = "404";
            break;
    }

    if ($tabel != "404") {
        $result = mysqli_query($GLOBALS['conn'], "SELECT judet, {$req['params']['item-mediu']}  FROM " . $tabel . "");
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }

        Response::json($data);
    } else {
        handle404();
    }
}


function getCityMediiMonthStatistics($req)
{
    Response::status(200);


    $tabel = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $tabel = "mediiMartie2020";
            break;
        case 'februarie2020':
            $tabel = "mediiFebruarie2020";
            break;
        case 'ianuarie2020':
            $tabel = "mediiIanuarie2020";
            break;
        case 'decembrie2019':
            $tabel = "mediiDecembrie2019";
            break;
        case 'noiembrie2019':
            $tabel = "mediiNoiemvrie2019";
            break;
        case 'octombrie2019':
            $tabel = "mediiOctombrie2019";
            break;
        case 'septembrie2019':
            $tabel = "mediiSeptembrie2019";
            break;
        case 'august2019':
            $tabel = "mediiAugust2019";
            break;
        case 'iulie2019':
            $tabel = "mediiIulie2019";
            break;
        case 'iunie2019':
            $tabel = "mediiIunie2019";
            break;
        case 'mai2019':
            $tabel = "mediiMai2019";
            break;
        case 'aprilie2019':
            $tabel = "mediiAprile2019";
            break;
        case 'martie2019':
            $tabel = "mediiMartie019";
            break;
        default:
            $tabel = "404";
            break;
    }

    if ($tabel != "404") {
        $param = "{$req['params']['city']}";

        $stmt = $GLOBALS['conn']->prepare("SELECT * FROM " . $tabel . " WHERE  judet = ?");
        $stmt->bind_param('s', $param);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }
        Response::json($data);
    } else {
        handle404();
    }
}



function getCityEducatieStatistics($req)
{

    Response::status(200);


    $tabel = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $tabel = "educatieMartie2020";
            break;
        case 'februarie2020':
            $tabel = "educatieFebruarie2020";
            break;
        case 'ianuarie2020':
            $tabel = "educatieIanuarie2020";
            break;
        case 'decembrie2019':
            $tabel = "educatieDecembrie2019";
            break;
        case 'noiembrie2019':
            $tabel = "educatieNoiemvrie2019";
            break;
        case 'octombrie2019':
            $tabel = "educatieOctombrie2019";
            break;
        case 'septembrie2019':
            $tabel = "educatieSeptembrie2019";
            break;
        case 'august2019':
            $tabel = "educatieAugust2019";
            break;
        case 'iulie2019':
            $tabel = "educatieIulie2019";
            break;
        case 'iunie2019':
            $tabel = "educatieIunie2019";
            break;
        case 'mai2019':
            $tabel = "educatieMai2019";
            break;
        case 'aprilie2019':
            $tabel = "educatieAprile2019";
            break;
        case 'martie2019':
            $tabel = "educatieMartie019";
            break;
        default:
            $tabel = "404";
            break;
    }
    if ($tabel != "404") {
        $param = "{$req['params']['city']}";

        $stmt = $GLOBALS['conn']->prepare("SELECT * FROM " . $tabel . " WHERE  judet = ?");
        $stmt->bind_param('s', $param);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }

        Response::json($data);

    } else {
        handle404();
    }
}

function getEducatieStatistics($req)
{

    Response::status(200);


    $tabel = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $tabel = "educatieMartie2020";
            break;
        case 'februarie2020':
            $tabel = "educatieFebruarie2020";
            break;
        case 'ianuarie2020':
            $tabel = "educatieIanuarie2020";
            break;
        case 'decembrie2019':
            $tabel = "educatieDecembrie2019";
            break;
        case 'noiembrie2019':
            $tabel = "educatieNoiemvrie2019";
            break;
        case 'octombrie2019':
            $tabel = "educatieOctombrie2019";
            break;
        case 'septembrie2019':
            $tabel = "educatieSeptembrie2019";
            break;
        case 'august2019':
            $tabel = "educatieAugust2019";
            break;
        case 'iulie2019':
            $tabel = "educatieIulie2019";
            break;
        case 'iunie2019':
            $tabel = "educatieIunie2019";
            break;
        case 'mai2019':
            $tabel = "educatieMai2019";
            break;
        case 'aprilie2019':
            $tabel = "educatieAprile2019";
            break;
        case 'martie2019':
            $tabel = "educatieMartie019";
            break;
        default:
            $tabel = "404";
            break;
    }
    if ($tabel != "404") {
        $result = mysqli_query($GLOBALS['conn'], "SELECT * FROM " . $tabel . "");
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }

        Response::json($data);
    } else {

        handle404();
    }
}

function getItemEducatieStatistics($req)
{
    Response::status(200);

    $tabel = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $tabel = "educatieMartie2020";
            break;
        case 'februarie2020':
            $tabel = "educatieFebruarie2020";
            break;
        case 'ianuarie2020':
            $tabel = "educatieIanuarie2020";
            break;
        case 'decembrie2019':
            $tabel = "educatieDecembrie2019";
            break;
        case 'noiembrie2019':
            $tabel = "educatieNoiemvrie2019";
            break;
        case 'octombrie2019':
            $tabel = "educatieOctombrie2019";
            break;
        case 'septembrie2019':
            $tabel = "educatieSeptembrie2019";
            break;
        case 'august2019':
            $tabel = "educatieAugust2019";
            break;
        case 'iulie2019':
            $tabel = "educatieIulie2019";
            break;
        case 'iunie2019':
            $tabel = "educatieIunie2019";
            break;
        case 'mai2019':
            $tabel = "educatieMai2019";
            break;
        case 'aprilie2019':
            $tabel = "educatieAprile2019";
            break;
        case 'martie2019':
            $tabel = "educatieMartie019";
            break;
        default:
            $tabel = "404";
            break;
    }
    if ($tabel != "404") {
        $result = mysqli_query($GLOBALS['conn'], "SELECT judet, {$req['params']['item-educatie']} FROM " . $tabel . "");
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }

        Response::json($data);
    } else {
        handle404();
    }
}

function IsLoggedIn()
{
    //$allHeaders = getallheaders();

     // If session is not set then redirect to Login Page
    if (!isset($_SESSION['user_id']))
    {
        Response::status(401);
        Response::json([
            "status" => 401,
            "reason" => "You can only access this route if you're authenticated!"
        ]);
    } else
        return true;

    return false;
}