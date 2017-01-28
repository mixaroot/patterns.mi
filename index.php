<?php
// Auto load classes
spl_autoload_register(function ($class) {
    include $class . '.php';
});

// Route
\lib\Route::start();