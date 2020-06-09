<?php

// set credentials for connecting to database
$CONFIG = [
  'servername' => "localhost",
  'username' => "userweb",
  'password' => 'baza99',
  'db' => 'autentificare'
];

//connecting to mysql database
$conn = new mysqli($CONFIG["servername"], $CONFIG["username"], $CONFIG["password"], $CONFIG["db"]);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 ?>