<?php
require_once '../config/config.php';  // Incluir archivo de configuracion para la conexion a la base de datos

// Funcion para obtener las comandes utilizando MySQLi
function obtenirComandesMySQLi($conn) {
    // Consulta SQL para obtener el nombre del usuario, producto y precio de las comandes
    $sql = "SELECT usuaris.nom, comandes.producte, comandes.preu 
            FROM usuaris 
            INNER JOIN comandes ON usuaris.id = comandes.usuari_id";
    // Ejecutar la consulta y devolver los resultados como un array asociativo
    return $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
}

// Llamar a la funcion para obtener las comandes y almacenarlas
$comandes_mysqli = obtenirComandesMySQLi($conn);
?>
