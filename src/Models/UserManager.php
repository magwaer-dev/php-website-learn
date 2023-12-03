<?php
// src/Models/UserManager.php

namespace MVC\Models;

use PDO;
use PDOException;

class UserManager {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
        $this->createTable();
    }

    private function createTable() {
        try {
            $this->pdo->query("
                CREATE TABLE IF NOT EXISTS users (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    name VARCHAR(255) NOT NULL,
                    email VARCHAR(255) NOT NULL
                )
            ");
        } catch (PDOException $e) {
            die("Error creating 'users' table: " . $e->getMessage());
        }
    }

    public function getUsers() {
        $stmt = $this->pdo->query("SELECT name, email FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createUser($name, $email) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
            $stmt->execute([$name, $email]);
        } catch (PDOException $e) {
            die("Error creating user: " . $e->getMessage());
        }
    }
}
