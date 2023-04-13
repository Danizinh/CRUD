<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "crud";
$pdo;

try {
  $pdo = new PDO("mysql:dbname=" . $db . ";host=" . $host, $user, $pass);
} catch (PDOException $e) {
  $error = $e->getMessage();
  print_r($e);
}
