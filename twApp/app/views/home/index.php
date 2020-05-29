<!DOCTYPE html>
<html lang="ro">
<?php /*session_start();
$s = session_status();
if ($s == 2) {
  if (is_numeric($_SESSION['user_id'])) {
    echo "<script> alert(\"Logged in!\");</script>";
  }
} */ ?>

<head>
  <meta charset="UTF-8">

  <title>RoSom</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="/twApp/public/css/menu.css" />
  <link rel="stylesheet" href="/twApp/public/css/styles.css">
  <link rel="stylesheet" href="/twApp/public/libs/v6.2.1-dist/ol.css">
  <script language="javascript" type="text/javascript" src="/twApp/public/js/main.js"></script>
  <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=fetch,requestAnimationFrame,Element.prototype.classList,URL"></script>
  <script>
    function logOut() {

      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("delogare").innerHTML = "<div id=\"alert\" class=\"logout\"><span id=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span><strong>" + this.responseText + "</strong></div>";
        }
      };
      xmlhttp.open("GET", "/twApp/app/models/logout.php", false);
      xmlhttp.send();
    }
  </script>

</head>

<body>
  <?php require_once  __DIR__ . '/../../components/header.php' ?>

  <div class="image-div">
    <div class="citat break">
      <div class="center">
        <h1> RoSom - afla mai multe despre somajul din Romania </h1><br>
        <img class="image-m" src="public/images/ro.png" alt="RoSom">
      </div>
    </div>
    <button onclick="window.location.href='auth/register'" class="image-btns image-btn">
      <h3>Sign up</h3>
    </button>
    <button onclick="window.location.href='auth/login'" class="image-btns image-btn">
      <h3>Log in</h3>
    </button>
    <div id="delogare"></div>
    <img class="logout" src="/twApp/public/images/logout.png" onclick="logOut()">

  </div>
  <script src="public/js/menu.js"></script>


</body>
<script src="/twApp/public/js/main.js"></script>
<script src="public/js/menu.js"></script>

</html>