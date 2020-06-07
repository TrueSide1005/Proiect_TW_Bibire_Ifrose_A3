
  <?php
  //stabilirea conexiunii cu baza de date
  require __DIR__ . '/../config.php';
  $q = strval($_GET['q']);
  global $conn;

  //preluarea informatiilor din baza de date si crearea unui string cu aceste date
  $statement = "SELECT " . "$q" . " FROM data ORDER BY id DESC;";
  $sql = "$statement";
  $result = mysqli_query($conn, $sql);
  $array = "";
  $ok = 0;
  while ($row = mysqli_fetch_array($result)) {
    if ($ok == 0) {
      $array = "$row[$q]";
      $ok++;
    } else {
      $array = "$row[$q]" . ", " . $array;
    }
  }
  echo $array;
  mysqli_close($conn);
  ?>