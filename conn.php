<?php 

// $host = "localhost";
// $user = "root";
// $pass = "";
// $db   = "cee_db";
// $conn = null;
// remte server
$host = "20.25.180.123";
$user = "gaurav";
$pass = "abc161966@";
$db   = "cee_db";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>