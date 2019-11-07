<?php

declare(strict_types=1);

class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
}
