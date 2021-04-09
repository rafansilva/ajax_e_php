<?php

/** BASE URL */
define("ROOT", "http://localhost/ajax_e_php");


/** DATABASE */

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "comments",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);


function url(string $path): string
{
    if ($path) {
        return ROOT . "{$path}";
    }

    return $path;
}

function message(string $type, string $message): string
{
    return "<div class=\"message {$type}\">{$message}</div>";
}