<?php
require_once '../src/pdo.php';  // Incluir el archivo con la conexion PDO
require_once '../src/mysqli.php';  // Incluir el archivo con la conexion MySQLi
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">  <!-- Definir el conjunto de caracteres -->
    <title>Exercici 2: Consultes Avançades</title>  <!-- Titulo de la pagina -->
</head>
<body>
    <h2>Comandes (PDO)</h2>  <!-- Titulo para la seccion de comandes con PDO -->
    <table border="1">  <!-- Crear tabla para mostrar las comandes con PDO -->
        <tr><th>Usuari</th><th>Producte</th><th>Preu</th></tr>  <!-- Cabecera de la tabla -->
        <?php foreach ($comandes_pdo as $comanda) : ?>  <!-- Iterar sobre las comandes obtenidas con PDO -->
            <tr><td><?= $comanda['nom'] ?></td><td><?= $comanda['producte'] ?></td><td><?= $comanda['preu'] ?>€</td></tr>  <!-- Mostrar los detalles de cada comanda -->
        <?php endforeach; ?>
    </table>

    <h2>Comandes (MySQLi)</h2>  <!-- Titulo para la seccion de comandes con MySQLi -->
    <table border="1">  <!-- Crear tabla para mostrar las comandes con MySQLi -->
        <tr><th>Usuari</th><th>Producte</th><th>Preu</th></tr>  <!-- Cabecera de la tabla -->
        <?php foreach ($comandes_mysqli as $comanda) : ?>  <!-- Iterar sobre las comandes obtenidas con MySQLi -->
            <tr><td><?= $comanda['nom'] ?></td><td><?= $comanda['producte'] ?></td><td><?= $comanda['preu'] ?>€</td></tr>  <!-- Mostrar los detalles de cada comanda -->
        <?php endforeach; ?>
    </table>
</body>
</html>
