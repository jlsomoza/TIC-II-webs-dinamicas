<?php
$host = "localhost";
$db   = "formulario_php";
$user = "root";
$pass = "root";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);
    // echo "Conexión correcta";
} catch (PDOException $e) {
    die("Erro na conexión: " . $e->getMessage());
}
?>