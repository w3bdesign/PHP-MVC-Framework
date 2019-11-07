<?php

declare(strict_types=1);

// DB Params
// Should we replace this with a class?
// [Architecture] Define `globals` is prohibited
define("DB_HOST", "localhost");
define("DB_USER", "__DB__USER");
define("DB_PASS", "__DB__PASS");
define("DB_NAME", "__DB__NAME");

// App root
define("APPROOT", dirname(dirname(__FILE__)));
// URL root
define("URLROOT", "__URL__");

// Site name - commented out for now. 

//define("SITENAME", "Site Name");
