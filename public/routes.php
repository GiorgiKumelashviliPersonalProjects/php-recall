<?php

use App\Controller\HomeController;
use App\Model\GeneralErrorMessage;
use App\Util\ColorFormats;

// Define your routes here
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

header("Content-Type: application/json; charset=UTF-8");

try {
    switch ($uri) {
        case '/':
            http_response_code(200);
            $controller = new HomeController();
            echo $controller->index();
            break;
        case '/info':
            header("Content-Type: text/html; charset=UTF-8");
            echo phpinfo();
            break;
        default:
            throw new Exception('Page not found');
    }
} catch (Exception $e) {
    error_log(sprintf(ColorFormats::RED, $e->getMessage() . " - $uri"));
    http_response_code(404);
    echo new GeneralErrorMessage($e->getMessage());
}