<?php
// src/Controllers/UserController.php

namespace MVC\Controllers;

use MVC\Controller;
use MVC\Models\User;
use MVC\Models\UserManager;
use PDO;

class UserController extends Controller {
    private $userManager;

    public function __construct(PDO $pdo) {
        parent::__construct($pdo);
        $this->userManager = new UserManager($pdo);
    }

    public function index() {
        $usersData = $this->userManager->getUsers();

        $users = [];
        foreach ($usersData as $userData) {
            $users[] = new User($userData['name'], $userData['email']);
        }

        $this->render('user/index', ['users' => $users]);
    }

    public function create() {
        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get user input
            $name = $_POST['name'];
            $email = $_POST['email'];

            // Validate and sanitize input (you should add more robust validation)
            $name = htmlspecialchars(trim($name));
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);

            // Create a new user in the database
            $this->userManager->createUser($name, $email);

            // Redirect to the user list page
            header("Location: /");
            exit();
        }

        // If the form is not submitted, display the create user form
        $this->render('user/create');
    }
}
