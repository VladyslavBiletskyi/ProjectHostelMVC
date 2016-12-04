<?php

// FRONT CONTROLLER

ini_set('display_errors', 1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__)); //  ROOT - полный путь к корню проекта

require_once ROOT.'/components/Router.php';
require_once ROOT.'/components/Db.php';

//тут становка соединения с БД

$router = new Router();
$router->run();