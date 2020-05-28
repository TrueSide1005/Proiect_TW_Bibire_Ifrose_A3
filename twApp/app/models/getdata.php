
  <?php
  $q = strval($_GET['q']);
  $con = mysqli_connect('localhost', 'root', '', 'tw');
  if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
  }

  mysqli_select_db($con, "tw");
  $statement = "SELECT " . "$q" . " FROM data ORDER BY id DESC;";
  $sql = "$statement";
  $result = mysqli_query($con, $sql);
  $array = "";
  $ok = 0;
  while ($row = mysqli_fetch_array($result)) {
    if ($ok == 0) {
      $array= "$row[$q]";
      $ok++;
    } else {
      $array = "$row[$q]" . ", " . $array;
    }
  }
  echo $array;
  mysqli_close($con);
  ?>