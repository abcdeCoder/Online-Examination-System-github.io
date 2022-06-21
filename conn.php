<?php 

// $host = "localhost";
// $user = "root";
// $pass = "";
// $db   = "cee_db";
// $conn = null;
// remte server
$host = "remotemysql.com";
$user = "i3oNlFxf56";
$pass = "AzndNm1JR6";
$db   = "i3oNlFxf56";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>