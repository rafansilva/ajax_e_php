<?php

use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";

$router = new Router(ROOT);
$router->namespace("Source\App");

$router->group(null);
$router->get("/", "Comments:home", "comment.home");
$router->post("/create", "Comments:create", "comment.create");


$router->dispatch();

if ($router->error()) {
    var_dump($router->error());
}