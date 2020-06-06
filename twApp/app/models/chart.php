<?php

//header('Content-Type: application/json');
 
require __DIR__ . '/../config.php';

$data  = $_GET['q'];
$set= explode(",", $data);

//echo $data;
// echo $q;
//query to get data from the table
$query = "SELECT Judet, NumarTotal, sub25, intre_25_29, intre_30_39, intre_40_49, intre_50_55, peste55,
                nr_femei_urban, nr_barbati_urban, nr_femei_rural, nr_barbati_rural,
                fara_studii, invatamant_primar, invatamant_gimnazial, invatamant_liceal, invatamant_postliceal, invatamant_profesional, invatamant_universitar


FROM " . $set[0] . " NATURAL JOIN  ". $set[1] . " NATURAL JOIN  " . $set[2] . "  NATURAL JOIN  " . $set[3] . " " ;


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
