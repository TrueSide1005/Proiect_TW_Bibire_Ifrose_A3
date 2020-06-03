<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="UTF-8">

  <title>RoSom</title>
  <link rel="shortcut icon" type="image/x-icon" href="/twApp/public/images/flag.ico"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/twApp/public/css/menu.css" />
  <link rel="stylesheet" href="/twApp/public/css/styles.css">
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
        <img class="image-m" src="/twApp/public/images/ro.png" alt="RoSom">
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
</body>
<script src="public/js/menu.js"></script>

</html>