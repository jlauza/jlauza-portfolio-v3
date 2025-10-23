<?php
include_once './header.php';

function showError404() {
    header("HTTP/1.1 404 Not Found");
    require '404.php';
    exit;
}

// Parse the request
$request = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$request = trim($request, "/");

// Handle root URL
if ($request === "" || $request === "/") {
    $request = "home"; // match it with `home` key in routes.php
}

// Load the routes config
$routes = require 'routes.php';

// Simple route resolver
if (array_key_exists($request, $routes)) {
    require_once $routes[$request];
} else {
    showError404();
}

include_once './footer.php';
