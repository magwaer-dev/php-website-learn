<?php

namespace MVC;

use PDO; // Add the import statement for PDO

class Controller {
    protected $pdo;

    public function __construct(PDO $pdo = null) {
        $this->pdo = $pdo;
    }

    protected function render($view, $data = []) {
        extract($data);
        include "views/$view.php";
    }
}
