<?php
require_once '../config/config.php';  // Incluir archivo de configuracion para la conexion a la base de datos

// Funcion para obtener usuarios mayores de 25 años usando PDO
function obtenirUsuarisPDO($pdo) {
    // Prepara la consulta SQL para seleccionar usuarios con edad mayor a 25
    $stmt = $pdo->prepare("SELECT * FROM usuaris WHERE edat > ?");
    $stmt->execute([25]);  // Ejecuta la consulta pasando el parametro de edad
    return $stmt->fetchAll(PDO::FETCH_ASSOC);  // Obtener los resultados como un array asociativo
}

// Llamar a la funcion y almacenar los usuarios obtenidos
$usuaris_pdo = obtenirUsuarisPDO($pdo);
?>
