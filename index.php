<?php

use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";

$router = new Router(ROOT);
$router->namespace("Source\App");

$router->group(null);
$router->get("/", "Comment:home", "comment.home");
$router->post("/create", "Form:create", "form.create");
$router->post("/delete", "Form:delete", "form.delete");

$router->dispatch();

if ($router->error()) {
    var_dump($router->error());
}