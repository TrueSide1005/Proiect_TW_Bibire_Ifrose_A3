<!DOCTYPE html>
<html lang="ro">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="/twApp/public/images/flag.ico" />
    <meta name="description" content="This is my page">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistici cartografice</title>
    <link rel="stylesheet" type="text/css" href="/twApp/public/css/map.css">
    <link rel="stylesheet" type="text/css" href="/twApp/public/css/menu.css" media="all" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
    <script async src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
    <script async src="/twApp/public/js/map/mini.js"></script>
</head>

<body>
    <?php require_once  __DIR__ . '/../../components/header.php' ?>
    <div class="container">
        <h3 id="titlu">Resurse cartografice</h3>
        <hr class="linie_titlu"> <br>
    </div>
    <div class="center">
        <div class="interactiv">
            <form class="date-pe-judete">
                <select id="jud" class="date-pe-judete" name="users" onchange="showUser(this.value)">
                    <option value="start">Selecteaza o data:</option>
                    <option value="martie2020_total">Rata somajului - martie 2020</option>
                    <option value="martie2020_femei">Rata somajului femei - martie 2020</option>
                    <option value="martie2020_barbati">Rata somajului barbati - martie 2020</option>
                    <option value="februarie2020_total">Rata somajului - februarie 2020</option>
                    <option value="februarie2020_femei">Rata somajului femei - februarie 2020</option>
                    <option value="februarie2020_barbati">Rata somajului barbati- februarie 2020</option>
                    <option value="ianuarie2020_total">Rata somajului - ianuarie 2020</option>
                    <option value="ianuarie2020_femei">Rata somajului femei - ianuarie 2020</option>
                    <option value="ianuarie2020_barbati">Rata somajului barbati - ianuarie 2020</option>
                    <option value="decembrie2019_total">Rata somajului - decembrie 2019</option>
                    <option value="decembrie2019_femei">Rata somajului femei - decembrie 2019</option>
                    <option value="decembrie2019_barbati">Rata somajului barbati - decembrie 2019</option>
                    <option value="noiembrie2019_total">Rata somajului - noiembrie 2019</option>
                    <option value="noiembrie2019_femei">Rata somajului femei - noiembrie 2019</option>
                    <option value="noiembrie2019_barbati">Rata somajului barbati - noiembrie 2019</option>
                    <option value="octombrie2019_total">Rata somajului - octombrie 2019</option>
                    <option value="octombrie2019_femei">Rata somajului femei - octombrie 2019</option>
                    <option value="octombrie2019_barbati">Rata somajului barbati - octombrie 2019</option>
                    <option value="septembrie2019_total">Rata somajului - septembrie 2019</option>
                    <option value="septembrie2019_femei">Rata somajului femei - septembrie 2019</option>
                    <option value="septembrie2019_barbati">Rata somajului barbati - septembrie 2019</option>
                    <option value="august2019_total">Rata somajului - august 2019</option>
                    <option value="august2019_femei">Rata somajului femei - august 2019</option>
                    <option value="august2019_barbati">Rata somajului barbati - august 2019</option>
                    <option value="iulie2019_total">Rata somajului - iulie 2019</option>
                    <option value="iulie2019_femei">Rata somajului femei - iulie 2019</option>
                    <option value="iulie2019_barbati">Rata somajului barbati - iulie 2019</option>
                    <option value="iunie2019_total">Rata somajului - iunie 2019</option>
                    <option value="iunie2019_femei">Rata somajului femei - iunie 2019</option>
                    <option value="iunie2019_barbati">Rata somajului barbati - iunie 2019</option>
                    <option value="mai2019_total">Rata somajului - mai 2019</option>
                    <option value="mai2019_femei">Rata somajului femei - mai 2019</option>
                    <option value="mai2019_barbati">Rata somajului barbati - mai 2019</option>
                    <option value="aprilie2019_total">Rata somajului - aprilie 2019</option>
                    <option value="aprilie2019_femei">Rata somajului femei - aprilie 2019</option>
                    <option value="aprilie2019_barbati">Rata somajului barbati - aprilie 2019</option>
                    <option value="martie2019_total">Rata somajului - martie 2019</option>
                    <option value="martie2019_femei">Rata somajului femei - martie 2019</option>
                    <option value="martie2019_barbati">Rata somajului barbati - martie 2019</option>
                </select>
                <label for="jud" class="invisible">s</label>
            </form>
            <button id="btn-download" class="buton-hover" onclick="doCapture();">Descarca PNG</button><a id="link"></a>
            <button id="btn-download" class="buton-hover" onclick="doSVG();">Descarca SVG</button>
            <button id="btn-download" class="buton-hover" onclick="csvData();">Descarca CSV</button>
        </div>
        <br>
        <div id="ufi">
            <div id="map" class="map">
                <div class="picture"></div>
            </div>
        </div>
    </div>
</body>

</html>