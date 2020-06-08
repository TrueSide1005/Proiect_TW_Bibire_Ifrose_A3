<?php
//rutele posibile si handle-ul fiecaruia
$mapRoutes = [
    [
        "method" => "GET",
        "route" => "map/:month/total",
        "handler" => "getMapRoutes"
    ],
    [
        "method" => "GET",
        "route" => "map/:month/total/:id",
        "handler" => "getMapRoutesTotalId"
    ],
    [
        "method" => "GET",
        "route" => "map/:month/femei/:id",
        "handler" => "getMapRoutesFemeiId"
    ],
    [
        "method" => "GET",
        "route" => "map/:month/barbati/:id",
        "handler" => "getMapRoutesBarbatiId"
    ],
    [
        "method" => "GET",
        "route" => "map/:month/femei",
        "handler" => "getMapRoutesFemei"
    ],
    [
        "method" => "GET",
        "route" => "map/:month/barbati",
        "handler" => "getMapRoutesBarbati"
    ],
    [
        "method" => "GET",
        "route" => "map/:month",
        "handler" => "getMapRoutesAll"
    ],
    [
        "method" => "GET",
        "route" => "map/id/:id",
        "handler" => "getMapRoutesComplete"
    ],
    [
        "method" => "GET",
        "route" => "map/:month/id/:id/barbati",
        "handler" => "getMapRoutesIdBarbati"
    ],
    [
        "method" => "GET",
        "route" => "map/:month/id/:id/femei",
        "handler" => "getMapRoutesIdFemei"
    ],
    [
        "method" => "GET",
        "route" => "map/:month/id/:id/total",
        "handler" => "getMapRoutesIdTotal"
    ],
    [
        "method" => "GET",
        "route" => "map/judet/:judet",
        "handler" => "getMapRoutesCompleteJudet"
    ],
    [
        "method" => "GET",
        "route" => "map/:month/id/:id",
        "handler" => "getMapRoutesId"
    ],
    [
        "method" => "GET",
        "route" => "map/:month/judet/:judet",
        "handler" => "getMapRoutesJudet"
    ],
    [
        "method" => "GET",
        "route" => "map/:month/judet/:judet/barbati",
        "handler" => "getMapRoutesJudetBarbati"
    ],
    [
        "method" => "GET",
        "route" => "map/:month/judet/:judet/femei",
        "handler" => "getMapRoutesJudetFemei"
    ],
    [
        "method" => "GET",
        "route" => "map/:month/judet/:judet/total",
        "handler" => "getMapRoutesJudetTotal"
    ],
];
//conexiunea cu baza de date
global $conn;

//handle-uri
function getMapRoutes($req)
{
    //echo "getMapRoutes";
    Response::status(200);
    $coloana = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $coloana = "martie2020_total";
            break;
        case 'februarie2020':
            $coloana = "februarie2020_total";
            break;
        case 'ianuarie2020':
            $coloana = "ianuarie2020_total";
            break;
        case 'decembrie2019':
            $coloana = "decembrie2019_total";
            break;
        case 'noiembrie2019':
            $coloana = "noiembrie2019_total";
            break;
        case 'octombrie2019':
            $coloana = "octombrie2019_total";
            break;
        case 'septembrie2019':
            $coloana = "septembrie2019_total";
            break;
        case 'august2019':
            $coloana = "august2019_total";
            break;
        case 'iulie2019':
            $coloana = "iulie2019_total";
            break;
        case 'iunie2019':
            $coloana = "iunie2019_total";
            break;
        case 'mai2019':
            $coloana = "mai2019_total";
            break;
        case 'aprilie2019':
            $coloana = "aprilie2019_total";
            break;
        default:
            $coloana = "404";
            break;
    }
    if ($coloana != "404") {
        require __DIR__ . '/../config.php';
        $result = mysqli_query($conn, "SELECT id, nume, " . $coloana . " FROM data ");
        //echo $result;
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }
        Response::json($data);
    } else {
        handle404();
    }
}

function getMapRoutesFemei($req)
{
    //echo "getMapRoutesFemei";
    Response::status(200);
    $coloana = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $coloana = "martie2020_femei";
            break;
        case 'februarie2020':
            $coloana = "februarie2020_femei";
            break;
        case 'ianuarie2020':
            $coloana = "ianuarie2020_femei";
            break;
        case 'decembrie2019':
            $coloana = "decembrie2019_femei";
            break;
        case 'noiembrie2019':
            $coloana = "noiembrie2019_femei";
            break;
        case 'octombrie2019':
            $coloana = "octombrie2019_femei";
            break;
        case 'septembrie2019':
            $coloana = "septembrie2019_femei";
            break;
        case 'august2019':
            $coloana = "august2019_femei";
            break;
        case 'iulie2019':
            $coloana = "iulie2019_femei";
            break;
        case 'iunie2019':
            $coloana = "iunie2019_femei";
            break;
        case 'mai2019':
            $coloana = "mai2019_femei";
            break;
        case 'aprilie2019':
            $coloana = "aprilie2019_femei";
            break;
        default:
            $coloana = "404";
            break;
    }
    if ($coloana != "404") {
        require __DIR__ . '/../config.php';
        $result = mysqli_query($conn, "SELECT id, nume, " . $coloana . " FROM data ");
        //echo $result;
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }
        Response::json($data);
    } else {
        handle404();
    }
}

function getMapRoutesBarbati($req)
{
    //echo "getMapRoutesBarbati";
    Response::status(200);
    $coloana = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $coloana = "martie2020_barbati";
            break;
        case 'februarie2020':
            $coloana = "februarie2020_barbati";
            break;
        case 'ianuarie2020':
            $coloana = "ianuarie2020_barbati";
            break;
        case 'decembrie2019':
            $coloana = "decembrie2019_barbati";
            break;
        case 'noiembrie2019':
            $coloana = "noiembrie2019_barbati";
            break;
        case 'octombrie2019':
            $coloana = "octombrie2019_barbati";
            break;
        case 'septembrie2019':
            $coloana = "septembrie2019_barbati";
            break;
        case 'august2019':
            $coloana = "august2019_barbati";
            break;
        case 'iulie2019':
            $coloana = "iulie2019_barbati";
            break;
        case 'iunie2019':
            $coloana = "iunie2019_barbati";
            break;
        case 'mai2019':
            $coloana = "mai2019_barbati";
            break;
        case 'aprilie2019':
            $coloana = "aprilie2019_barbati";
            break;
        default:
            $coloana = "404";
            break;
    }
    if ($coloana != "404") {
        require __DIR__ . '/../config.php';
        $result = mysqli_query($conn, "SELECT id, nume, " . $coloana . " FROM data ");
        //echo $result;
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }
        Response::json($data);
    } else {
        handle404();
    }
}

function getMapRoutesIdBarbati($req)
{
    Response::status(200);
    $coloana = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $coloana = "martie2020_barbati";
            break;
        case 'februarie2020':
            $coloana = "februarie2020_barbati";
            break;
        case 'ianuarie2020':
            $coloana = "ianuarie2020_barbati";
            break;
        case 'decembrie2019':
            $coloana = "decembrie2019_barbati";
            break;
        case 'noiembrie2019':
            $coloana = "noiembrie2019_barbati";
            break;
        case 'octombrie2019':
            $coloana = "octombrie2019_barbati";
            break;
        case 'septembrie2019':
            $coloana = "septembrie2019_barbati";
            break;
        case 'august2019':
            $coloana = "august2019_barbati";
            break;
        case 'iulie2019':
            $coloana = "iulie2019_barbati";
            break;
        case 'iunie2019':
            $coloana = "iunie2019_barbati";
            break;
        case 'mai2019':
            $coloana = "mai2019_barbati";
            break;
        case 'aprilie2019':
            $coloana = "aprilie2019_barbati";
            break;
        default:
            $coloana = "404";
            break;
    }
    $param = "{$req['params']['id']}";
    if ($coloana != "404" && is_numeric($param) && $param <= 41) {
        require __DIR__ . '/../config.php';
        $stmt = $conn->prepare("SELECT id, nume, " . $coloana . " FROM data WHERE  id = ?");
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

function getMapRoutesIdTotal($req)
{
    Response::status(200);
    $coloana = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $coloana = "martie2020_total";
            break;
        case 'februarie2020':
            $coloana = "februarie2020_total";
            break;
        case 'ianuarie2020':
            $coloana = "ianuarie2020_total";
            break;
        case 'decembrie2019':
            $coloana = "decembrie2019_total";
            break;
        case 'noiembrie2019':
            $coloana = "noiembrie2019_total";
            break;
        case 'octombrie2019':
            $coloana = "octombrie2019_total";
            break;
        case 'septembrie2019':
            $coloana = "septembrie2019_total";
            break;
        case 'august2019':
            $coloana = "august2019_total";
            break;
        case 'iulie2019':
            $coloana = "iulie2019_total";
            break;
        case 'iunie2019':
            $coloana = "iunie2019_total";
            break;
        case 'mai2019':
            $coloana = "mai2019_total";
            break;
        case 'aprilie2019':
            $coloana = "aprilie2019_total";
            break;
        default:
            $coloana = "404";
            break;
    }
    $param = "{$req['params']['id']}";
    if ($coloana != "404" && is_numeric($param) && $param <= 41) {
        require __DIR__ . '/../config.php';
        $stmt = $conn->prepare("SELECT id, nume, " . $coloana . " FROM data WHERE  id = ?");
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

function getMapRoutesIdFemei($req)
{
    Response::status(200);
    $coloana = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $coloana = "martie2020_femei";
            break;
        case 'februarie2020':
            $coloana = "februarie2020_femei";
            break;
        case 'ianuarie2020':
            $coloana = "ianuarie2020_femei";
            break;
        case 'decembrie2019':
            $coloana = "decembrie2019_femei";
            break;
        case 'noiembrie2019':
            $coloana = "noiembrie2019_femei";
            break;
        case 'octombrie2019':
            $coloana = "octombrie2019_femei";
            break;
        case 'septembrie2019':
            $coloana = "septembrie2019_femei";
            break;
        case 'august2019':
            $coloana = "august2019_femei";
            break;
        case 'iulie2019':
            $coloana = "iulie2019_femei";
            break;
        case 'iunie2019':
            $coloana = "iunie2019_femei";
            break;
        case 'mai2019':
            $coloana = "mai2019_femei";
            break;
        case 'aprilie2019':
            $coloana = "aprilie2019_femei";
            break;
        default:
            $coloana = "404";
            break;
    }
    $param = "{$req['params']['id']}";
    if ($coloana != "404" && is_numeric($param) && $param <= 41) {
        require __DIR__ . '/../config.php';
        $stmt = $conn->prepare("SELECT id, nume, " . $coloana . " FROM data WHERE  id = ?");
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

function getMapRoutesJudetBarbati($req)
{
    Response::status(200);
    $coloana = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $coloana = "martie2020_barbati";
            break;
        case 'februarie2020':
            $coloana = "februarie2020_barbati";
            break;
        case 'ianuarie2020':
            $coloana = "ianuarie2020_barbati";
            break;
        case 'decembrie2019':
            $coloana = "decembrie2019_barbati";
            break;
        case 'noiembrie2019':
            $coloana = "noiembrie2019_barbati";
            break;
        case 'octombrie2019':
            $coloana = "octombrie2019_barbati";
            break;
        case 'septembrie2019':
            $coloana = "septembrie2019_barbati";
            break;
        case 'august2019':
            $coloana = "august2019_barbati";
            break;
        case 'iulie2019':
            $coloana = "iulie2019_barbati";
            break;
        case 'iunie2019':
            $coloana = "iunie2019_barbati";
            break;
        case 'mai2019':
            $coloana = "mai2019_barbati";
            break;
        case 'aprilie2019':
            $coloana = "aprilie2019_barbati";
            break;
        default:
            $coloana = "404";
            break;
    }
    $param = "{$req['params']['judet']}";
    if ($coloana != "404" && !is_numeric($param) && is_string($param)) {
        require __DIR__ . '/../config.php';
        $stmt = $conn->prepare("SELECT id, nume, " . $coloana . " FROM data WHERE  nume = ?");
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

function getMapRoutesJudetFemei($req)
{
    Response::status(200);
    $coloana = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $coloana = "martie2020_femei";
            break;
        case 'februarie2020':
            $coloana = "februarie2020_femei";
            break;
        case 'ianuarie2020':
            $coloana = "ianuarie2020_femei";
            break;
        case 'decembrie2019':
            $coloana = "decembrie2019_femei";
            break;
        case 'noiembrie2019':
            $coloana = "noiembrie2019_femei";
            break;
        case 'octombrie2019':
            $coloana = "octombrie2019_femei";
            break;
        case 'septembrie2019':
            $coloana = "septembrie2019_femei";
            break;
        case 'august2019':
            $coloana = "august2019_femei";
            break;
        case 'iulie2019':
            $coloana = "iulie2019_femei";
            break;
        case 'iunie2019':
            $coloana = "iunie2019_femei";
            break;
        case 'mai2019':
            $coloana = "mai2019_femei";
            break;
        case 'aprilie2019':
            $coloana = "aprilie2019_femei";
            break;
        default:
            $coloana = "404";
            break;
    }
    $param = "{$req['params']['judet']}";
    if ($coloana != "404" && !is_numeric($param) && is_string($param)) {
        require __DIR__ . '/../config.php';
        $stmt = $conn->prepare("SELECT id, nume, " . $coloana . " FROM data WHERE  nume = ?");
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

function getMapRoutesJudetTotal($req)
{
    Response::status(200);
    $coloana = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $coloana = "martie2020_total";
            break;
        case 'februarie2020':
            $coloana = "februarie2020_total";
            break;
        case 'ianuarie2020':
            $coloana = "ianuarie2020_total";
            break;
        case 'decembrie2019':
            $coloana = "decembrie2019_total";
            break;
        case 'noiembrie2019':
            $coloana = "noiembrie2019_total";
            break;
        case 'octombrie2019':
            $coloana = "octombrie2019_total";
            break;
        case 'septembrie2019':
            $coloana = "septembrie2019_total";
            break;
        case 'august2019':
            $coloana = "august2019_total";
            break;
        case 'iulie2019':
            $coloana = "iulie2019_total";
            break;
        case 'iunie2019':
            $coloana = "iunie2019_total";
            break;
        case 'mai2019':
            $coloana = "mai2019_total";
            break;
        case 'aprilie2019':
            $coloana = "aprilie2019_total";
            break;
        default:
            $coloana = "404";
            break;
    }
    $param = "{$req['params']['judet']}";
    if ($coloana != "404" && !is_numeric($param) && is_string($param)) {
        require __DIR__ . '/../config.php';
        $stmt = $conn->prepare("SELECT id, nume, " . $coloana . " FROM data WHERE  nume = ?");
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

function getMapRoutesAll($req)
{
    //echo "getMapRoutesAll";
    Response::status(200);
    $coloana = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $coloana = "martie2020_total, martie2020_femei, martie2020_barbati";
            break;
        case 'februarie2020':
            $coloana = "februarie2020_total, februarie2020_femei, februarie2020_barbati";
            break;
        case 'ianuarie2020':
            $coloana = "ianuarie2020_total, ianuarie2020_femei, ianuarie2020_barbati";
            break;
        case 'decembrie2019':
            $coloana = "decembrie2019_total, decembrie2019_femei, decembrie2019_barbati";
            break;
        case 'noiembrie2019':
            $coloana = "noiembrie2019_total, noiembrie2019_femei, noiembrie2019_barbati";
            break;
        case 'octombrie2019':
            $coloana = "octombrie2019_total, octombrie2019_femei, octombrie2019_barbati";
            break;
        case 'septembrie2019':
            $coloana = "septembrie2019_total, septembrie2019_femei, septembrie2019_barbati";
            break;
        case 'august2019':
            $coloana = "august2019_total, august2019_femei, august2019_barbati";
            break;
        case 'iulie2019':
            $coloana = "iulie2019_total, iulie2019_femei, iulie2019_barbati";
            break;
        case 'iunie2019':
            $coloana = "iunie2019_total, iunie2019_femei, iunie2019_barbati";
            break;
        case 'mai2019':
            $coloana = "mai2019_total, mai2019_femei, mai2019_barbati";
            break;
        case 'aprilie2019':
            $coloana = "aprilie2019_total, aprilie2019_femei, aprilie2019_barbati";
            break;
        default:
            $coloana = "404";
            break;
    }
    require __DIR__ . '/../config.php';
    if ($coloana != "404") {
        $result = mysqli_query($conn, "SELECT id, nume, " . $coloana . " FROM data ");
        //echo $result;
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }
        Response::json($data);
    } else {
        handle404();
    }
}

function getMapRoutesId($req)
{
    //echo "getMapRoutesId";
    Response::status(200);
    $coloana = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $coloana = "martie2020_total, martie2020_femei, martie2020_barbati";
            break;
        case 'februarie2020':
            $coloana = "februarie2020_total, februarie2020_femei, februarie2020_barbati";
            break;
        case 'ianuarie2020':
            $coloana = "ianuarie2020_total, ianuarie2020_femei, ianuarie2020_barbati";
            break;
        case 'decembrie2019':
            $coloana = "decembrie2019_total, decembrie2019_femei, decembrie2019_barbati";
            break;
        case 'noiembrie2019':
            $coloana = "noiembrie2019_total, noiembrie2019_femei, noiembrie2019_barbati";
            break;
        case 'octombrie2019':
            $coloana = "octombrie2019_total, octombrie2019_femei, octombrie2019_barbati";
            break;
        case 'septembrie2019':
            $coloana = "septembrie2019_total, septembrie2019_femei, septembrie2019_barbati";
            break;
        case 'august2019':
            $coloana = "august2019_total, august2019_femei, august2019_barbati";
            break;
        case 'iulie2019':
            $coloana = "iulie2019_total, iulie2019_femei, iulie2019_barbati";
            break;
        case 'iunie2019':
            $coloana = "iunie2019_total, iunie2019_femei, iunie2019_barbati";
            break;
        case 'mai2019':
            $coloana = "mai2019_total, mai2019_femei, mai2019_barbati";
            break;
        case 'aprilie2019':
            $coloana = "aprilie2019_total, aprilie2019_femei, aprilie2019_barbati";
            break;
        default:
            $coloana = "404";
            break;
    }
    require __DIR__ . '/../config.php';
    $param = "{$req['params']['id']}";
    if ($coloana != "404" && $param <= 41 && is_numeric($param)) {
        $stmt = $conn->prepare("SELECT id, nume, " . $coloana . " FROM data WHERE  id = ?");
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

function getMapRoutesComplete($req)
{
    //echo "getMapRoutesComplete";
    Response::status(200);
    require __DIR__ . '/../config.php';
    $param = "{$req['params']['id']}";
    if ($param <= 41 && is_numeric($param)) {
        $stmt = $conn->prepare("SELECT * FROM data WHERE  id = ?");
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

function getMapRoutesCompleteJudet($req)
{
    //echo "getMapRoutesComplete";
    Response::status(200);
    require __DIR__ . '/../config.php';
    $param = "{$req['params']['judet']}";
    if (is_string($param)) {
        $stmt = $conn->prepare("SELECT * FROM data WHERE  nume = ?");
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

function getMapRoutesTotalId($req)
{
    //echo "getMapRoutesTotalId";
    Response::status(200);
    $coloana = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $coloana = "martie2020_total";
            break;
        case 'februarie2020':
            $coloana = "februarie2020_total";
            break;
        case 'ianuarie2020':
            $coloana = "ianuarie2020_total";
            break;
        case 'decembrie2019':
            $coloana = "decembrie2019_total";
            break;
        case 'noiembrie2019':
            $coloana = "noiembrie2019_total";
            break;
        case 'octombrie2019':
            $coloana = "octombrie2019_total";
            break;
        case 'septembrie2019':
            $coloana = "septembrie2019_total";
            break;
        case 'august2019':
            $coloana = "august2019_total";
            break;
        case 'iulie2019':
            $coloana = "iulie2019_total";
            break;
        case 'iunie2019':
            $coloana = "iunie2019_total";
            break;
        case 'mai2019':
            $coloana = "mai2019_total";
            break;
        case 'aprilie2019':
            $coloana = "aprilie2019_total";
            break;
        default:
            $coloana = "404";
            break;
    }
    require __DIR__ . '/../config.php';
    $param = "{$req['params']['id']}";
    if ($coloana != 404 && $param <= 41 && is_numeric($param)) {
        $stmt = $conn->prepare("SELECT id, nume, " . $coloana . " FROM data WHERE  id = ?");
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

function getMapRoutesFemeiId($req)
{
    //echo ("getMapRoutesFemeiId");
    Response::status(200);
    $coloana = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $coloana = "martie2020_femei";
            break;
        case 'februarie2020':
            $coloana = "februarie2020_femei";
            break;
        case 'ianuarie2020':
            $coloana = "ianuarie2020_femei";
            break;
        case 'decembrie2019':
            $coloana = "decembrie2019_femei";
            break;
        case 'noiembrie2019':
            $coloana = "noiembrie2019_femei";
            break;
        case 'octombrie2019':
            $coloana = "octombrie2019_femei";
            break;
        case 'septembrie2019':
            $coloana = "septembrie2019_femei";
            break;
        case 'august2019':
            $coloana = "august2019_femei";
            break;
        case 'iulie2019':
            $coloana = "iulie2019_femei";
            break;
        case 'iunie2019':
            $coloana = "iunie2019_femei";
            break;
        case 'mai2019':
            $coloana = "mai2019_femei";
            break;
        case 'aprilie2019':
            $coloana = "aprilie2019_femei";
            break;
        default:
            $coloana = "404";
            break;
    }
    require __DIR__ . '/../config.php';
    $param = "{$req['params']['id']}";
    if ($coloana != 404 && $param <= 41 && is_numeric($param)) {
        $stmt = $conn->prepare("SELECT id, nume, " . $coloana . " FROM data WHERE  id = ?");
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

function getMapRoutesBarbatiId($req)
{
    //echo ("getMapRoutesBarbatiId");
    Response::status(200);
    $coloana = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $coloana = "martie2020_barbati";
            break;
        case 'februarie2020':
            $coloana = "februarie2020_barbati";
            break;
        case 'ianuarie2020':
            $coloana = "ianuarie2020_barbati";
            break;
        case 'decembrie2019':
            $coloana = "decembrie2019_barbati";
            break;
        case 'noiembrie2019':
            $coloana = "noiembrie2019_barbati";
            break;
        case 'octombrie2019':
            $coloana = "octombrie2019_barbati";
            break;
        case 'septembrie2019':
            $coloana = "septembrie2019_barbati";
            break;
        case 'august2019':
            $coloana = "august2019_barbati";
            break;
        case 'iulie2019':
            $coloana = "iulie2019_barbati";
            break;
        case 'iunie2019':
            $coloana = "iunie2019_barbati";
            break;
        case 'mai2019':
            $coloana = "mai2019_barbati";
            break;
        case 'aprilie2019':
            $coloana = "aprilie2019_barbati";
            break;
        default:
            $coloana = "404";
            break;
    }
    require __DIR__ . '/../config.php';
    $param = "{$req['params']['id']}";
    if ($coloana != 404 && $param <= 41 && is_numeric($param)) {
        $stmt = $conn->prepare("SELECT id, nume, " . $coloana . " FROM data WHERE  id = ?");
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

function getMapRoutesJudet($req)
{
    Response::status(200);
    $coloana = "";
    switch ($req['params']['month']) {
        case 'martie2020':
            $coloana = "martie2020_total, martie2020_femei, martie2020_barbati";
            break;
        case 'februarie2020':
            $coloana = "februarie2020_total, februarie2020_femei, februarie2020_barbati";
            break;
        case 'ianuarie2020':
            $coloana = "ianuarie2020_total, ianuarie2020_femei, ianuarie2020_barbati";
            break;
        case 'decembrie2019':
            $coloana = "decembrie2019_total, decembrie2019_femei, decembrie2019_barbati";
            break;
        case 'noiembrie2019':
            $coloana = "noiembrie2019_total, noiembrie2019_femei, noiembrie2019_barbati";
            break;
        case 'octombrie2019':
            $coloana = "octombrie2019_total, octombrie2019_femei, octombrie2019_barbati";
            break;
        case 'septembrie2019':
            $coloana = "septembrie2019_total, septembrie2019_femei, septembrie2019_barbati";
            break;
        case 'august2019':
            $coloana = "august2019_total, august2019_femei, august2019_barbati";
            break;
        case 'iulie2019':
            $coloana = "iulie2019_total, iulie2019_femei, iulie2019_barbati";
            break;
        case 'iunie2019':
            $coloana = "iunie2019_total, iunie2019_femei, iunie2019_barbati";
            break;
        case 'mai2019':
            $coloana = "mai2019_total, mai2019_femei, mai2019_barbati";
            break;
        case 'aprilie2019':
            $coloana = "aprilie2019_total, aprilie2019_femei, aprilie2019_barbati";
            break;
        default:
            $coloana = "404";
            break;
    }
    require __DIR__ . '/../config.php';
    $param = "{$req['params']['judet']}";
    if ($coloana != "404" && is_string($param) && !is_numeric($param)) {
        $stmt = $conn->prepare("SELECT id, nume, " . $coloana . " FROM data WHERE nume = ?");
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
