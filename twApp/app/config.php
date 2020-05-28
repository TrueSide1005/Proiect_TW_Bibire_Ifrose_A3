<?php

# Make the userid and password constants
/*DEFINE ('DB_USER', 'userweb');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_PASSWORD', 'baza99');
DEFINE ('DB_NAME', 'autentificare');*/

# Defines the data source name which is MySQL, local
# and the DB to use
//$dsn = 'mysql:host=localhost;dbname=autentificare';

# Try to connect and if we get an error display it
# and call for an error page to load
/*try{
  $db = new PDO($dsn, DB_USER, DB_PASSWORD);
  echo 'done';
} catch (PDOException $e){
  $err_msg = $e->getMessage();
  include('db_error.php');
  exit();
}*/


$CONFIG = [
  'servername' => "localhost",
  'username' => "userweb",
  'password' => 'baza99',
  'db' => 'autentificare'
];

$conn = new mysqli($CONFIG["servername"], $CONFIG["username"], $CONFIG["password"], $CONFIG["db"]);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 ?>