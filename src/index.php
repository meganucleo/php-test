<?php
$servername = "db";
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$database = $_ENV['DB_DATABASE'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexión exitosa a la base de datos MySQL";
} catch(PDOException $e) {
  echo "Error en la conexión: " . $e->getMessage();
}
?>

