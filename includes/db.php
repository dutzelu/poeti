<?php


define( "BASE_URL", "http://localhost/poeti/");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/poeti");

// Connect to the MySQL database.

$conn = new PDO("mysql:host=localhost; dbname=poeti", "root", "");

// Check connection
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $pdo = new PDO("mysql:host=localhost; dbname=poeti", 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    die();
}




?>