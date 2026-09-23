<?php
$host = getenv('DB_HOST') ?: 'db';
$db   = getenv('DB_NAME') ?: 'DWES';
$user = getenv('DB_USER') ?: 'ivan';
$pass = getenv('DB_PASSWORD') ?: 'i2v0a0n6';

$mysqli = @new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    echo "<h1>Apache funcionando</h1>";
    echo "<p style='color:red'>Error al conectar con MySQL: " . $mysqli->connect_error . "</p>";
} else {
    echo "<h1>Apache + MySQL funcionando correctamente</h1>";
    echo "<p>Conectado a la base de datos: " . htmlspecialchars($db) . "</p>";
}