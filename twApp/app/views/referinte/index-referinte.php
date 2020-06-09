<!DOCTYPE html>
<html>

<head>
    <title>RoSom</title>
    <meta name="description" content="Referinte page">
    <link rel="shortcut icon" type="image/x-icon" href="/public/images/flag.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/menu.css" />
    <link rel="stylesheet" type="text/css" href="/public/css/refrinte.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php session_start();
    require_once  __DIR__ . '/../../components/header.php' ?>
    <div class="image-div">
        <div class="center">
            <b>
                <div class="form"> <h2>Referinte:</h2>
                    <a href="https://data.gov.ro/dataset?q=somaj&sort=metadata_modified+desc"><p>Data.Gov.Ro</p></a>
                    <a href="https://www.chartjs.org/"><p>Chartjs.org</p></a>
                    <a href="http://leafletjs.com/"><p>Leafletjs</p></a>
                    <a href="https://github.com/niklasvh/html2canvas"><p>Html2canvas</p></a>
                    <a href="https://github.com/terser/terser"><p>Terser</p></a>       
                </div>
                 
            </b>           
        </div>
    </div>
</body>
<script src="/public/js/menu.js"></script>

</html>