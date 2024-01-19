<?php

$dsn = "mysql:host=localhost;dbname=compte";
$dbusername = "root";
$dbpassword = ""; // Add your database password here

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

// Your code for database connection goes here

?>
