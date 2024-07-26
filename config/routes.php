<?php

use App\Controller\CalculatorController;

$controller = new CalculatorController();

$action = $_GET['action'] ?? 'index';

if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    header("HTTP/1.0 404 Not Found");
    echo "404 Not Found";
}