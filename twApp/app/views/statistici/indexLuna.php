
<!DOCTYPE html>
<html lang="ro">

<head>
<meta name="description" content="Statistics page">
    <meta charset="UTF-8">
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoSom</title>
    <link rel="stylesheet" type="text/css" href="/twApp/public/css/menu.css" media="all">
    <link rel="stylesheet" type="text/css" href="/twApp/public/css/file.css" />
    <script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>

</head>

<body>

    <?php require_once  __DIR__ . '/../../components/header.php' ?>

    <div class="container">
        <h3 id="titlu">Date si resurse</h3> 
        <hr class="linie_titlu"> <br>
    </div>


    <div class="download">
        
        <p class="doc"> Numărul șomerilor și rata șomajului</p>
        <div class="dropdown">
            <button class="dropbtn">Download</button>
            <div class="dropdown-content">
                <form action="" method="post">
                    <input type="submit" name="ExportRata" value="Download-XML" />
                    <input type="submit" name="ExportRata" value="Download-CSV" />
                    <input type="submit" name="ExportRata" value="Download-PDF" />
                </form>
            </div>
        </div>
        <div class="grafic">
            <a id="download" download="Rata.svg" href="" title="Descarca grafic">
                Download Grafic
            </a>
        </div>

    </div>
    <div class="diagram-container">
        <div class="diagram"><canvas id="bar-chart"></canvas> </div>
    </div>

    <div class="download">

        <p class="doc"> Numărul șomerilor structurați pe grupe de vârstă</p>
        <div class="dropdown">
            <button class="dropbtn">Download</button>
            <div class="dropdown-content">
                <form action="" method="post">
                    <input type="submit" name="ExportVarste" value="Download-XML" />
                    <input type="submit" name="ExportVarste" value="Download-CSV" />
                    <input type="submit" name="ExportVarste" value="Download-PDF" />
                </form>
            </div>
        </div>
        <div class="grafic">
            <a id="download" download="Rata.svg" href="" title="Descarca grafic">
                Download Grafic
            </a>
        </div>

    </div>

    <div class="diagram-container">
        <div class="diagram"> <canvas id="line-chart"></canvas></div>
    </div>


    <div class="download">
        <p class="doc"> Numărul șomerilor structurați pe medii</p>
        <div class="dropdown">
            <button class="dropbtn">Download</button>
            <div class="dropdown-content">
                <form action="" method="post">
                    <input type="submit" name="ExportMedii" value="Download-XML" />
                    <input type="submit" name="ExportMedii" value="Download-CSV" />
                    <input type="submit" name="ExportMedii" value="Download-PDF" />
                </form>
            </div>
        </div>
        <div class="grafic">
            <a id="download" download="ChartImage.jpg" href="" title="Descarca grafic">
                Download Grafic
            </a>

        </div>
    </div>

    <div class="diagram-container">
        <div class="diagram"> <canvas id="medii-chart"></canvas></div>
    </div>

    <div class="download">
        <p class="doc"> Numărul șomerilor structurați pe nivelul de educatie</p>
        <div class="dropdown">
            <button class="dropbtn">Download</button>
            <div class="dropdown-content">
                <form action="" method="post">
                    <input type="submit" name="ExportEducatie" value="Download-XML" />
                    <input type="submit" name="ExportEducatie" value="Download-CSV" />
                    <input type="submit" name="ExportEducatie" value="Download-PDF" />
                </form>
            </div>
        </div>
        <div class="grafic">
            <a id="download" download="ChartImage.jpg" href="" title="Descarca grafic">
                Download Grafic
            </a>

        </div>
    </div>

    <div class="diagram-container">
        <div class="diagram"> <canvas id="educatie-chart"></canvas></div>
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
<script src="/twApp/public/js/download.js"></script>

</html>