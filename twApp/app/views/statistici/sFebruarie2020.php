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

    <header>
        <div class="barmenu">
            <nav>
                <a href="home">
                    <img class="logo" src="/twApp/public/images/s.png" alt="Sigla" style="height:3em">
                </a>

                <div class="menu-icons">

                    <img class="open" src="public/images/icons8-menu-50.png" alt="menu ">


                    <img class="close" src="public/images/icons8-cancel-50.png" alt="cancel">

                </div>

                <ul class="listaPrincipala">

                    <li><a href="home">Organizare</a></li>
                    <li><a href=#><span></span>Judete</a>
                        <ul class="sublist">
                            <li><a href=#>Alba</a></li>
                            <li><a href=#>Arad</a></li>
                            <li><a href=#>Argeș</a></li>
                            <li><a href=#>Bacău</a> </li>
                            <li><a href=#>Bihor</a> </li>
                            <li><a href=#>Bistrița-Năsăud</a></li>
                            <li><a href=#>Botoșani</a> </li>
                            <li><a href=#>Brașov</a></li>
                            <li><a href=#>Brăila</a></li>
                            <li><a href=#>București</a></li>
                            <li><a href=#>Buzău</a></li>
                            <li><a href=#>Caraș-Severin</a></li>
                            <li><a href=#>Călărași</a></li>
                            <li><a href=#>Cluj</a></li>
                            <li><a href=#>Constanța</a></li>
                            <li><a href=#>Covasna</a></li>
                            <li><a href=#>Dâmbovița</a></li>
                            <li><a href=#>Dolj</a></li>
                            <li><a href=#>Galați</a></li>
                            <li><a href=#>Giurgiu</a></li>
                            <li><a href=#>Gorj</a></li>
                            <li><a href=#>Harghita</a></li>
                            <li><a href=#>Hunedoara</a></li>
                            <li><a href=#>Ialomița</a></li>
                            <li><a href=#>Iași</a></li>
                            <li><a href=#>Ilfov</a></li>
                            <li><a href=#>Maramureș</a></li>
                            <li><a href=#>Mehedinți</a></li>
                            <li><a href=#>Mureș</a></li>
                            <li><a href=#>Neamt</a></li>
                            <li><a href=#>Olt</a></li>
                            <li><a href=#>Prahova</a></li>
                            <li><a href=#>Satu Mare</a></li>
                            <li><a href=#>Sălaj</a></li>
                            <li><a href=#>Sibiu</a></li>
                            <li><a href=#>Suceava</a></li>
                            <li><a href=#>Teleorman</a></li>
                            <li><a href=#>Timiș</a></li>
                            <li><a href=#>Tulcea</a></li>
                            <li><a href=#>Vaslui</a></li>
                            <li><a href=#>Vâlcea</a></li>
                            <li><a href=#>Vrancea</a></li>
                        </ul>
                    </li>
                    <li><a href=#><span></span>Statistici</a>
                        <ul class="sublist">
                            <li><a href='http://localhost/twApp/statistici/Martie2020'>Martie 2020</a></li>
                        </ul>
                    </li>

                    <li><a href=#>Referinte</a></li>
                </ul>

                <div class="sign">
                    <button onclick="window.location.href='/twApp/auth/register'" class="log">
                        Sign in
                    </button>

                    <button onclick="window.location.href='/twApp/auth/login'" class="log">
                        Log in
                    </button>

                </div>
            </nav>
        </div>
    </header>
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