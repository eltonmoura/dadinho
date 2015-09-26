<?php

function myAutoload($class_name)
{
    $path = "";
    if (preg_match('#Test$#', $class_name)) {
        $path = __DIR__ . '/../tests/' . $class_name . '.php';
    } else {
        $path =    __DIR__ . '/' . $class_name . '.php';
    }

    if (is_file($path)) {
        include $path;
    }
}

spl_autoload_register('myAutoload');
