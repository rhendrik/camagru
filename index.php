<?php
session_start();
//Define the root of project as well as the directory separator
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
//create formatted array from url
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];
require_once(ROOT . DS . 'core' . DS . 'bootstrap.php');
