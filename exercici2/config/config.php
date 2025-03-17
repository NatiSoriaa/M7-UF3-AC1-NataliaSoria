<?php
$host = 'localhost';  // Definir el servidor de la base de datos
$dbname = 'exercici2';  // Nombre de la base de datos
$user = 'root';  // Usuario de la base de datos
$pass = '';  // Contraseña de la base de datos

try {
    // Intentar crear una conexion PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Establecer el manejo de errores
} catch (PDOException $e) {
    die("Error de conexion: " . $e->getMessage());  // En caso de error, mostrar el mensaje
}

$conn = new mysqli($host, $user, $pass, $dbname);  // Crear conexion con MySQLi
if ($conn->connect_error) {
    die("Error de conexion MySQLi: " . $conn->connect_error);  // En caso de error, mostrar el mensaje
}
?>
