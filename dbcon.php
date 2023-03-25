<?php
$servername = "localhost";
$username = "root";
$password = "";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=alumni", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }
try {
  $conn = new PDO("mysql:host=$servername;dbname=alumni", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  // var_dump($conn) ;
} catch (PDOException $e) {
  echo $e->getMessage();
  die();
}
?>