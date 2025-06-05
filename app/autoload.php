<?php
spl_autoload_register(function ($class) {
    $baseDir = __DIR__ . '/app/';
    $paths = ['model', 'controller'];
    foreach ($paths as $path) {
        $file = $baseDir . $path . '/' . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});
?>