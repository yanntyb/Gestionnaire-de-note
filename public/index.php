<?php

use Yanntyb\Projet\Controller\HomeController;
use Yanntyb\Router\Model\Classes\Router;
use Yanntyb\Router\Model\Classes\Route;

require "../vendor/autoload.php";

$router = new Router(new Route("home", "/", [HomeController::class, "home"]));
$router->addRoute("test", "/test", [HomeController::class, "message"]);

$router->handleQuery();