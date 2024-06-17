<?php

function json_error_response(string $message, string $url = null): void
{
    $finalUrl = $url ?? '';
    error_log($message . " - $finalUrl");
    http_response_code(404);
    echo json_encode(["error" => $message]);
}

if (php_sapi_name() === 'cli-server') {
    // Serve static files as is
    $url = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . '/public' . $url['path'];

    if (is_file($file)) {
        json_error_response("Page not found", $url['path']);
        return;
    } else {
        // For all non-existent paths, route to index.php in public folder
        include __DIR__ . '/public/index.php';
    }
} else {
    json_error_response("Php server was not started from cli");
}

