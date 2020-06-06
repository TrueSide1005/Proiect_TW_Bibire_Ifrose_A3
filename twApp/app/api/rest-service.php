<?php

//require_once "map-routes.php";
require_once "month-statistics-routes.php";
//require_once "statistics-citys-routes.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$allHeaders = getallheaders();

$allRoutes = [ 
    // ...$mapRoutes,
    ...$monthStatisticsRoutes,
    // ...$statisticsCitysRoutes,
    // ...other-arrays-routes 
];


//verify if route exist
foreach ($allRoutes as $routeConfig) {
    if (parseRequest($routeConfig)) {
        exit;
    }
}

//route or method wrong
handle404();


function parseRequest($routeConfig)
{

    $url = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method !== $routeConfig['method']) {
        return false;
    }

    //verify route format with regexp
    $regExpString = routeExpToRegExp($routeConfig['route']);

    if (preg_match("/$regExpString/", $url, $matches)) {
        // echo "ruta corecta";
        $params = [];
        $query = [];
        $parts = explode('/', $routeConfig['route']);

        // Params 
        $index = 1;
        foreach ($parts as $p) {
            if ($p[0] === ':') {
                $params[substr($p, 1)] = $matches[$index];
                $index++;
            }
        }
        //echo var_dump($params); // { ["itemName"]=> string(x) "itemValue" ... }

        // Query
        if (strpos($url, '?')) {
            $queryString = explode('?', $url)[1];
            $queryParts = explode('&', $queryString);

            foreach ($queryParts as $part) {
                if (strpos($part, '=')) {
                    $query[explode('=', $part)[0]] = explode('=', $part)[1];
                }
            }
        }
        // echo var_dump($query);

        // Payload
        $payload = file_get_contents('php://input');
        if (strlen($payload)) {
            $payload = json_decode($payload);
        } else {
            $payload = NULL;
        }


        // if middlewares =>  run them first

        if (isset($routeConfig['middlewares'])) {
            foreach ($routeConfig['middlewares'] as $middlewareName) {
                $didPass = call_user_func($middlewareName, [
                    "params" => $params,
                    "query" => $query,
                    "payload" => $payload
                ]);

                if (!$didPass) {
                    exit();
                }
            }
        }

        call_user_func($routeConfig['handler'], [
            "params" => $params,
            "query" => $query,
            "payload" => $payload
        ]);

        return true;
    }

    return false;
}

function handle404()
{
    Response::status(404);
    echo "Not found";

}

function routeExpToRegExp($route)
{
    $regExpString = "";
    $parts = explode('/', $route);

    foreach ($parts as $p) {
        $regExpString .= '\/';
        if (empty($p[0]) ){
            Response::status(404);
        } else  if ($p[0] === ':') {
            $regExpString .= '([a-zA-Z0-9-]+)';
        } else {
            $regExpString .= $p;
        }
    }
    $regExpString .= '(\?.*)?$';
    return $regExpString;
}
