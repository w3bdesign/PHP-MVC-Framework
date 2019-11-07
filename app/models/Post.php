<?php

declare(strict_types=1);

final class Post
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }
}
