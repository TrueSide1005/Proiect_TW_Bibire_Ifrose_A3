
  <?php
    require __DIR__ . '/../config.php';
    $q = strval($_GET['q']);
    global $conn;
  
    $statement = "SELECT nume," . "$q" . " FROM data ORDER BY nume ASC;";
    $sql = "$statement";
    $result = mysqli_query($conn, $sql);
    $array=array();
    while ($row = mysqli_fetch_array($result)) {
        $row_array['Judet']=$row['nume'];
        $row_array['Rata somajului (%)']=$row[$q];
        array_push($array, $row_array);
    }
    mysqli_close($conn);
    echo json_encode($array);
    ?>