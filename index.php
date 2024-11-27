<?php
// index.php

require_once "controllers/ContactController.php";

$controller = new ContactController();

$action = $_GET['action'] ?? 'list';

if (method_exists($controller, $action)) {
    $controller->$action($_GET['id'] ?? null);
} else {
    echo "Acción no encontrada";
}
