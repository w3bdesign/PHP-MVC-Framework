<?php
// Load libraries


declare(strict_types=1);

require_once "../app/config/config.php";

// Autoload core libraries

spl_autoload_register(function ($className) {
    require_once "../app/libraries/" . $className . ".php";
});
