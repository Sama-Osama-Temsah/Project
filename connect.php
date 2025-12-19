<?php
// db.php - DB connection using PDO
$DB_HOST = '127.0.0.1';
$DB_NAME = 'web10';
$DB_USER = 'root';
$DB_PASS = ''; 

$dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

    //[key => val]
];

try {
    $pdo = new PDO($dsn, $DB_USER, $DB_PASS,$options);
} catch (PDOException $e) {
    echo "<h1>Database connection failed: " . $e->getMessage() . "</h1>";
    exit;                       
}
