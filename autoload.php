<?php

spl_autoload_register(function(string $name) {
    $name = __DIR__ . '/' . str_replace('\\','/', $name) . '.php';
    require_once $name;
});