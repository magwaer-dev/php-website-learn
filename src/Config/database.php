<?php

namespace MVC\Config;

use PDO;
use PDOException;

class Database
{
    public static function connect()
    {
        $host = 'localhost';
        $dbName = 'php_website';
        $user = 'root';
        $password = 'admin';

        try {
            return new PDO("mysql:host=$host;dbname=$dbName", $user, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ]);
        } catch (PDOException $e) {
            throw new \Exception("Database connection failed: " . $e->getMessage());
        }
    }
}
