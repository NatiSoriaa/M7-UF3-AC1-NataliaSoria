<?php
require_once '../config/config.php';  // Incluir archivo de configuracion para la conexion a la base de datos

// Funcion para obtener usuarios mayores de 25 anos usando MySQLi
function obtenirUsuarisMySQLi($conn) {
    // Prepara la consulta SQL para seleccionar usuarios con edad mayor a 25
    $stmt = $conn->prepare("SELECT * FROM usuaris WHERE edat > ?");
    $edat = 25;  // Definir la edad minima
    $stmt->bind_param("i", $edat);  // Vincular el parametro de edad a la consulta (tipo entero)
    $stmt->execute();  // Ejecutar la consulta
    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);  // Obtener los resultados como un array asociativo
}

// Llamar a la funcion y almacenar los usuarios obtenidos
$usuaris_mysqli = obtenirUsuarisMySQLi($conn);
?>
