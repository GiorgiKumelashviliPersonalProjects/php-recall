<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

// Configure error reporting
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/../logs/error.log');

require __DIR__ . '/routes.php';
