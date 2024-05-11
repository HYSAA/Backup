<?php

spl_autoload_register(function ($className) {
    // Namespace prefix
    $prefix = 'MyNamespace\\';

    // Base directory for the namespace prefix
    $baseDir = __DIR__ . '/';

    // Does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $className, $len) !== 0) {
        // No, move to the next registered autoloader
        return;
    }

    // Get the relative class name
    $relativeClass = substr($className, $len);

    // Replace namespace separator with directory separator
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    // If the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});
