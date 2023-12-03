<?php

function establishDatabaseConnection() {
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'php_website');
    define('DB_USER', 'root');
    define('DB_PASS', 'admin');

    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
}
