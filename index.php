<?php

// Auto load classes
spl_autoload_register(function ($class) {
    $file = $_SERVER['DOCUMENT_ROOT'] . '/' . str_replace('\\', '/', $class) . '.php';
    include_once $file;
});

// Route
\lib\Route::start();