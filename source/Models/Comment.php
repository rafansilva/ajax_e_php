<?php


namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;

class Comment extends DataLayer
{
    public function __construct()
    {
        parent::__construct("comments", ["name", "comment"]);
    }
}