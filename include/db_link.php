<?php
$dsn = "mysql:host=localhost;dbname=book_store"; // Correct DSN
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Fixed typo
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage(); // Fixed typo
}
?>