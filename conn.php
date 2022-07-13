<?php 

// $host = "localhost";
// $user = "root";
// $pass = "";
// $db   = "cee_db";
// $conn = null;
// remte server
$host = "sql6.freesqldatabase.com";
$user = "sql6506158";
$pass = "NlGXYr6ngC";
$db   = "sql6506158";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>