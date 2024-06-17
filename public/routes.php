<?php


use App\Controller\HomeController;

// Define your routes here
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        $controller = new HomeController();
        $controller->index();
        break;
    default:
        http_response_code(404);
        echo "Page not found";
        break;
}
