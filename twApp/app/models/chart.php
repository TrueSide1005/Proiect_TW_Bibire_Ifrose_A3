<?php

global $conn;

require __DIR__ . '/../config.php';

//query to get data from the table
$query = "SELECT Judet, NumarTotal  FROM ratamartie2020";

//execute query
$result = mysqli_query($conn, $query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$conn->close();

//now print the data
echo json_encode($data);
