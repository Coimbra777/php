<?php
$requestUri = $_SERVER['REQUEST_URI'];

$requestUri = ltrim($requestUri, '/');

if (preg_match('/^([a-zA-Z0-9-_]+)\/(.*)$/', $requestUri, $matches)) {
    list($fullMatch, $directory, $file) = $matches;

    $filePath = __DIR__ . '/' . $directory . '/' . $file . '.php';

    if (file_exists($filePath)) {
        include $filePath;
    } else {
        echo "Arquivo ou diretório não encontrado!";
    }
} else {
    echo "Bem-vindo à página inicial!";
}
