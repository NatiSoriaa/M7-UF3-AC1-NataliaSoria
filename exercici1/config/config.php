<?php
$host = 'localhost';  // Definir servidor de base de datos
$dbname = 'exercici1';  // Nombre de la base de datos
$user = 'root';  // Usuario de la base de datos
$pass = '';  // Contraseña del usuario

try {
    // Intentar conexion PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Establecer manejo de errores
} catch (PDOException $e) {
    // Si falla, mostrar error PDO
    die("Error de conexion: " . $e->getMessage());
}

// Intentar conexion MySQLi
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    // Si falla, mostrar error MySQLi
    die("Error de conexion MySQLi: " . $conn->connect_error);
}
?>
