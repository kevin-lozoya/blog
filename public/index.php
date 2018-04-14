<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';
include_once '../config.php';

$baseDir =str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
$baseUrl = 'http://'.$_SERVER['HTTP_HOST'].$baseDir;
define('BASE_URL', $baseUrl);

$route = $_GET['route'] ?? '/';

use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

$router->controller('/', App\Controllers\IndexController::class);
$router->controller('/admin', App\Controllers\Admin\IndexController::class);
$router->controller('/admin/posts', \App\Controllers\Admin\PostController::class);

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);

echo $response;
?>