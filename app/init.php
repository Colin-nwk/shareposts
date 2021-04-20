<?php

//load config
require_once 'config/config.php';

// load libraries or core files

// require_once "libraries/core.php";
// require_once "libraries/controller.php";

//load halpers
require_once "helpers/url_helper.php";
require_once "helpers/session_helper.php";

/**
 * for autoload to work in libraries the class name needs to match the file name -- exactly ie Controller - Controller
 */
// Autoload Core Libraries
spl_autoload_register(function($className){ 
    require_once 'libraries/' . $className . '.php';
});
