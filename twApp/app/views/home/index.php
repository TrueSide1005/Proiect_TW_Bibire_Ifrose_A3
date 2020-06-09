<!DOCTYPE html>
<html lang="ro">
<?php session_start();
if (isset($_SESSION['err'])) {
  $err = $_SESSION['err'];
  echo "<script> alert(\"$err\");</script>";
  session_unset();
  session_destroy();
} ?>


<head>
  <meta charset="UTF-8">

  <title>RoSom - Pagina principala</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="This is my page" />
  <link rel="shortcut icon" type="image/x-icon" href="/public/images/flag.ico" />
  <link rel="stylesheet" type="text/css" href="/public/css/menu.css" />
  <link rel="stylesheet" href="/public/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <?php require_once  __DIR__ . '/../../components/header.php' ?>
  <div class="image-div">
    <div class="citat break">
      <div class="center">
        <h2> RoSom - afla mai multe despre somajul din Romania </h2><br>
        <img class="image-m" src="/public/images/ro.png" alt="RoSom" width="194px" height="91px">
      </div>
    </div>
    <button onclick="window.location.href='auth/register'" class="image-btns image-btn">
      <h3>Sign up</h3>
    </button>
    <button onclick="window.location.href='auth/login'" class="image-btns image-btn">
      <h3>Log in</h3>
    </button>
    <div id="delogare"></div>
    <img class="logout" src="/public/images/logout.png" onclick="logOut()" alt="Logout" width="48px" height="48px">
  </div>
</body>
<script src="public/js/menu.js"></script>
<script async>
  function logOut() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("delogare").innerHTML = "<div id=\"alert\" class=\"logout\"><span id=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span><strong>" + this.responseText + "</strong></div>";
      }
    };
    xmlhttp.open("GET", "/app/components/logout.php", false);
    xmlhttp.send();
  }
</script>

</html>