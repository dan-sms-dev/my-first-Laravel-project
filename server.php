<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Serve the requested resource as-is if it exists in the public folder.
$publicPath = __DIR__ . '/public';
$requested = $publicPath . $uri;

if ($uri !== '/' && file_exists($requested)) {
    return false;
}

require_once $publicPath . '/index.php';
