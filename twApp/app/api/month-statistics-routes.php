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


$monthStatisticsRoutes = [
    [
        "method" => "GET",
        //"middlewares" => ["IsLoggedIn"],
        "route" => "statistics/:month",
        "handler" => "getMonthStatistics"
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
        //"middlewares" => ["IsLoggedIn"],
        "route" => "statistics/:month/educatie",
        "handler" => "getEducatieStatistics"
    ],

    [
        "method" => "GET",
        "middlewares" => ["IsLoggedIn"],
        "route" => "statistics/:month/numarul-si-rata/:city",   //!!!!!!!!!!!!!!!!
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
        //"middlewares" => ["IsLoggedIn"],
        "route" => "statistics/:month/medii/:item-mediu",
        "handler" => "getItemMediiStatistics"
    ],
 
    [
        "method" => "GET",
        // "middlewares" => ["IsLoggedIn"],
        "route" => "statistics/:month/educatie/:item-educatie",
        "handler" => "getItemEducatietatistics"
    ]
];



global $conn;

function getMonthStatistics($req)
{
    $tabel = "";
    $stm = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $tabel = "rataMartie2020";
            break;
        case 'februarie2020':
            $tabel = "rataFebruarie2020";
            break;
        default:
            break;
    }

    Response::status(200);

    require __DIR__ . '/../config.php';

    if (isset($_GET["sort"]) && $_GET["sort"] == "numar-total") {
        $stm .= "SELECT * FROM " . $tabel . " order by numartotal";
    } else
        $stm .= "SELECT * FROM " . $tabel . "";

    $result = mysqli_query($conn, $stm);
    //echo $result;
    $data = array();
     foreach ($result as $row) {
        $data[] = $row;
    }

    Response::json($data);
    //echo "Get month {$req['params']['month']}";
}

function getItemMonthStatistics($req)
{
    $tabel = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $tabel = "rataMartie2020";
            break;
        case 'februarie2020':
            $tabel = "rataFebruarie2020";
            break;
        default:
            break;
    }

    Response::status(200);

    require __DIR__ . '/../config.php';
    $result = mysqli_query($conn, "SELECT judet, {$req['params']['item-rata']} FROM " . $tabel . " ");
    //echo $result;
    $data = array();
    foreach ($result as $row) {
        $data[] = $row;
    }

    Response::json($data);
}

function getCityMonthStatistics($req)
{
    $tabel = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $tabel = "rataMartie2020";
            break;
        case 'februarie2020':
            $tabel = "rataFebruarie2020";
            break;
        default:
            break;
    }
    $param = "{$req['params']['city']}";
    Response::status(200);

    require __DIR__ . '/../config.php';

    $stmt = $conn->prepare("SELECT * FROM " . $tabel . " WHERE  judet = ?");
    $stmt->bind_param('s', $param);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = array();
    foreach ($result as $row) {
        $data[] = $row;
    }

    Response::json($data);
}


function getVarsteStatistics($req)
{
    $tabel = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $tabel = "varsteMartie2020";
            break;
        case 'februarie2020':
            $tabel = "varsteFebruarie2020";
            break;
        default:
            break;
    }

    Response::status(200);

    require __DIR__ . '/../config.php'; 
    $result = mysqli_query($conn, "SELECT * FROM ". $tabel . " ");
    $data = array();
    foreach ($result as $row) {
        $data[] = $row;
    }

    Response::json($data);
}

function getItemVarsteStatistics($req)
{
    $tabel = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $tabel = "varsteMartie2020";
            break;
        case 'februarie2020':
            $tabel = "varsteFebruarie2020";
            break;
        default:
            break;
    }

    Response::status(200);

    require __DIR__ . '/../config.php';
    $result = mysqli_query($conn, "SELECT judet, {$req['params']['item-varsta']} FROM ". $tabel . "");
    //echo $result;
    $data = array();
    foreach ($result as $row) {
        $data[] = $row;
    }

    Response::json($data);
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
        default:
            break;
    }
    require __DIR__ . '/../config.php';
    $result = mysqli_query($conn, "SELECT * FROM ". $tabel . "");
    //echo $result;
    $data = array();
    foreach ($result as $row) {
        $data[] = $row;
    }

    Response::json($data);
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
        default:
            break;
    }
    require __DIR__ . '/../config.php';
    $result = mysqli_query($conn, "SELECT judet, {$req['params']['item-mediu']}  FROM ". $tabel . "");
    //echo $result;
    $data = array();
    foreach ($result as $row) {
        $data[] = $row;
    }

    Response::json($data);
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
        default:
            break;
    }
    require __DIR__ . '/../config.php';
    $result = mysqli_query($conn, "SELECT * FROM ". $tabel . "");
    //echo $result;
    $data = array();
    foreach ($result as $row) {
        $data[] = $row;
    }

    Response::json($data);
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
        default:
            break;
    }
    require __DIR__ . '/../config.php';
    $result = mysqli_query($conn, "SELECT * FROM ". $tabel . "");
    //echo $result;
    $data = array();
    foreach ($result as $row) {
        $data[] = $row;
    }

    Response::json($data);
}

function IsLoggedIn()
{
    //$allHeaders = getallheaders();

    if (!isset($_SESSION['user_id'])) // If session is not set then redirect to Login Page
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
