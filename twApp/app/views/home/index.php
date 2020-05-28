<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="UTF-8">

  <title>RoSom</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" type="text/css" href="/twApp/public/css/home.css" />-->
  <!-- <link rel="stylesheet" type="text/css" href="public/css/menu.css" /> -->
  <link rel="stylesheet" type="text/css" href="/twApp/public/css/menu.css" />
  <link rel="stylesheet" type="text/css" href="/twApp/public/css/styles.css" />
  <script language="javascript" type="text/javascript" src="/twApp/public/js/main.js"></script>
  <script language="javascript" type="text/javascript" src="/twApp/public/libs/v6.2.1-dist/ol.js"></script>
  <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=fetch,requestAnimationFrame,Element.prototype.classList,URL"></script>


</head>

<body>

  <header>
    <div class="barmenu">
      <nav>
        <a href="home">
          <img class="logo" src="public/images/s.png" alt="Sigla" style="height:3em">
        </a>

        <div class="menu-icons">

          <img class="open" src="public/images/icons8-menu-50.png" alt="menu ">


          <img class="close" src="public/images/icons8-cancel-50.png" alt="cancel">

        </div>

        <ul class="listaPrincipala">

          <li><a href="home">Organizare</a></li>
          <li><a href=#><span></span>Lista judete</a>
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
              <li><a href=#>Statistici bugetare</a></li>
            </ul>
          </li>

          <li><a href=#>Referinte</a></li>
        </ul>

        <div class="sign">
          <button onclick="window.location.href='auth/register'" class="log">
            Sign up
          </button>

          <button onclick="window.location.href='auth/login'" class="log">
            Log in
          </button>

        </div>
      </nav>

    </div>
  </header>
  <div class="image-div">
    <div class="citat break">
      <div class="center"><h1> RoSom - afla mai multe despre somajul din Romania </h1><br>
      <img class="image-m" src="public/images/ro.png" alt="RoSom"></div>
    </div>
    <button onclick="window.location.href='auth/register'" class="image-btns image-btn">
      <h3>Sign up</h3>
    </button>
    <button onclick="window.location.href='auth/login'" class="image-btns image-btn">
      <h3>Log in</h3>
    </button>
  </div>
  <script src="public/js/menu.js"></script>
</body>

<script src="public/js/main.js"></script>
<script src="public/libs/v6.2.1-dist/ol.js"></script>

</html>