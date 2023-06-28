<?php
$servername = "db";

// Ruta y nombre del archivo de variables de entorno
$envFile = '.env';

// Lee el contenido del archivo de variables de entorno
$envContent = file_get_contents($envFile);

// Analiza el contenido del archivo y establece las variables de entorno
foreach (explode("\n", $envContent) as $line) {
    $line = trim($line);
    if ($line && strpos($line, '=') !== false) {
        list($key, $value) = explode('=', $line, 2);
        $_ENV[$key] = $value;
        putenv("$key=$value");
    }
}

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

