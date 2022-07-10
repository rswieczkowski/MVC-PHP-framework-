<?php
// Load config

require_once "config/config.php";

// Auto load core Libraries
spl_autoload_register(function ($className) {
    require_once 'libraries/' . $className . '.php';
});