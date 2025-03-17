<?php
require_once '../src/pdo.php';  // Incluir archivo de conexion PDO
require_once '../src/mysqli.php';  // Incluir archivo de conexion MySQLi
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exercici 1: PDO i MySQLi</title>  <!-- Titulo de la pagina -->
</head>
<body>
    <h2>Usuaris amb més de 25 anys (PDO)</h2>  <!-- Titulo para usuarios con más de 25 años usando PDO -->
    <ul>
        <!-- Iterar sobre los usuarios obtenidos con PDO y mostrar sus datos -->
        <?php foreach ($usuaris_pdo as $usuari) : ?>
            <li><?= $usuari['nom'] ?> - <?= $usuari['email'] ?> - <?= $usuari['edat'] ?> anys</li>
        <?php endforeach; ?>
    </ul>

    <h2>Usuaris amb més de 25 anys (MySQLi)</h2>  <!-- Titulo para usuarios con más de 25 años usando MySQLi -->
    <ul>
        <!-- Iterar sobre los usuarios obtenidos con MySQLi y mostrar sus datos -->
        <?php foreach ($usuaris_mysqli as $usuari) : ?>
            <li><?= $usuari['nom'] ?> - <?= $usuari['email'] ?> - <?= $usuari['edat'] ?> anys</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
