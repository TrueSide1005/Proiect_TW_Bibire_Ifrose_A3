<!DOCTYPE html>
<html lang="ro">

<head>
    <meta name="description" content="Statistics page">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="/twApp/public/images/flag.ico" />
    <title>RoSom</title>
    <link rel="stylesheet" type="text/css" href="/twApp/public/css/menu.css" media="all">
    <link rel="stylesheet" type="text/css" href="/twApp/public/css/file.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    <script async src="/twApp/public/js/map/mini.js"></script>
</head>

<body>

    <?php require_once  __DIR__ . '/../../components/header.php' ?>

    <div class="antet"> 
        <h3 id="titlu">Date si resurse</h3>
        <hr class="linie_titlu"> <br>
    </div>


    <div class="bar">

        <p class="paragraph"> Situaţie statistică cu privire la numărul şomerilor înregistraţi în evidenţele ANOFM (structurată pe sexe,
            someri indemnizaţi şi şomeri neindemnizaţi) şi rata şomajului (totală şi pe sexe).</p>
        <div class="download">
            <button class="button">Descărcare <i class="fa fa-caret-down"></i></button>

            <form class="download-content" action="" method="post">
                <input type="submit" name="ExportRata" value="Descărcare-XML" />
                <input type="submit" name="ExportRata" value="Descărcare-CSV" />
                <input type="submit" name="ExportRata" value="Descărcare-PDF" />
            </form>
            <button id="btn-download" class="button" onclick="doSVG();">Descărcare SVG</button><a id="link"></a>
            <button id="btn-download" class="button" onclick="doCapture();">Descărcare PNG</button><a id="link"></a>

        </div>


    </div>

    <div class="diagram-container" id="map">
        <div class="diagram"><canvas id="total"></canvas> </div>
    </div>

    <div class="bar">

        <p class="paragraph"> Situaţie statistică cu privire la numărul şomerilor înregistraţi în evidenţele ANOFM structurați pe județe și
            grupe de vârstă (sub 25 ani, 25-29 ani, 30-39 ani, 40-49 ani, 50-55 ani, peste 55 ani).</p>
        <div class="download">
            <button class="button">Descărcare <i class="fa fa-caret-down"></i></button>

            <form class="download-content" action="" method="post">
                <input type="submit" name="ExportRata" value="Descărcare-XML" />
                <input type="submit" name="ExportRata" value="Descărcare-CSV" />
                <input type="submit" name="ExportRata" value="Descărcare-PDF" />
            </form>
            <button id="btn-download" class="button" onclick="doSVG();">Descărcare SVG</button><a id="link"></a>
            <button id="btn-download" class="button" onclick="doCapture();">Descărcare PNG</button><a id="link"></a>

        </div>

    </div>

    <div class="diagram-container">
        <div class="diagram"> <canvas id="line"></canvas></div>
    </div>


    <div class="bar">
        <p class="paragraph"> Structura şomerilor înregistrați în evidențele ANOFM structurați pe judeţe, medii de
             rezidenţe(urban/rural) şi sexe raportat la mediul de rezidență.</p>
        <div class="download">
            <button class="button">Descărcare <i class="fa fa-caret-down"></i></button>

            <form class="download-content" action="" method="post">
                <input type="submit" name="ExportRata" value="Descărcare-XML" />
                <input type="submit" name="ExportRata" value="Descărcare-CSV" />
                <input type="submit" name="ExportRata" value="Descărcare-PDF" />
            </form>
            <button id="btn-download" class="button" onclick="doSVG();">Descărcare SVG</button><a id="link"></a>
            <button id="btn-download" class="button" onclick="doCapture();">Descărcare PNG</button><a id="link"></a>

        </div>
    </div>

    <div class="diagram-container">
        <div class="diagram"> <canvas id="medii"></canvas></div>
    </div>

    <div class="bar">
        <p class="doc"> Situaţie statistică cu privire la numărul şomerilor înregistraţi în evidenţele ANOFM structurați pe județe și nivel de educație 
            (fără studii, învațământ primar, gimnazial, liceal, postliceal, profesional/arte și meserii, universitar).</p>
            <div class="download">
            <button class="button">Descărcare <i class="fa fa-caret-down"></i></button>

            <form class="download-content" action="" method="post">
                <input type="submit" name="ExportRata" value="Descărcare-XML" />
                <input type="submit" name="ExportRata" value="Descărcare-CSV" />
                <input type="submit" name="ExportRata" value="Descărcare-PDF" />
            </form>
            <button id="btn-download" class="button" onclick="doSVG();">Descărcare SVG</button><a id="link"></a>
            <button id="btn-download" class="button" onclick="doCapture();">Descărcare PNG</button><a id="link"></a>

        </div>
    </div>

    <div class="diagram-container">
        <div class="diagram"> <canvas id="educatie"></canvas></div>
    </div>

</body>
<script type="text/javascript">
    var set = new Array("<?= $data[0]; ?>", "<?= $data[1]; ?>", "<?= $data[2]; ?>", "<?= $data[3]; ?>");
</script>
<script type="text/javascript" src="/twApp/public/js/RataChart.js"></script>
<script src="/twApp/public/js/LineChart.js"></script>
<script type="text/javascript">
    var set = new Array("<?= $data[0]; ?>", "<?= $data[1]; ?>", "<?= $data[2]; ?>", "<?= $data[3]; ?>");
</script>
<script async src="/twApp/public/js/MediiChart.js"></script>
<script src="/twApp/public/js/EducatieChart.js"></script>
<script src="/twApp/public/js/menu.js"></script>

</html>