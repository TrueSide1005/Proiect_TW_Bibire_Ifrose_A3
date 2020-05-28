<!DOCTYPE html>
<html lang="ro">

<head>
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="/twApp/public/css/menu.css" />

    <link rel="stylesheet" type="text/css" href="/twApp/public/css/file.css" />
    <link rel="stylesheet" type="text/css" href="/twApp/public/css/diagram.css" />
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
            <div class="btn">
                <form action="" method="post">
                    <input type="submit" name="submit" value="Download" />

                </form>

            </div>
            <div class="grafic">
                <a id="download" download="ChartImage.jpg" href="" title="Descarca grafic">
                    Download Grafic
                </a>
            </div>
        </div>
        <div class="diagram-container">
            <div class="diagram"><canvas id="myChart"></canvas> </div>
        </div>

        <div class="download">
            <p class="doc"> Numărul șomerilor structurați pe grupe de vârstă</p>
            <div class="btn">
                <form action="" method="post">
                    <input type="submit" name="submit" value="Download" />

                </form>

            </div>
            <div class="grafic">
                <a id="download" download="ChartImage.jpg" href="" title="Descarca grafic">
                    Download Grafic
                </a>
            </div>
        </div>

        <div class="diagram-container">
            <div class="diagram"> <canvas id="line-chart"></canvas></div>
        </div>

        <div class="download">
            <p class="doc"> Numărul șomerilor structurați pe medii</p>
            <div class="btn">
                <form action="" method="post">
                    <input type="submit" name="submit" value="Download" />

                </form>

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
   
    <!-- <a href="#" id="btn-download" download="chart.jpg" target="_blank">Download</a>-->

</body>
<script src="/twApp/public/js/line_chart.js"></script>
<script src="/twApp/public/js/chart.js"></script>
<script src="/twApp/public/js/medii.js"></script>
<script src="/twApp/public/js/donload.js"></script>

</html>