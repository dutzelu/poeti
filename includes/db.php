<?php


define( "BASE_URL", "http://localhost/poeti/");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/poeti");

// Connect to the MySQL database.

$conn = new PDO("mysql:host=localhost; dbname=poeti", "root", "");

// Check connection
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);






?>