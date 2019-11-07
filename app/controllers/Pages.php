<?php

declare(strict_types=1);

final class Pages extends Controller
{
    public function __construct()
    {
        // Add something here?
    }

    public function index()
    {
        $data = [
            "title" => "Welcome",
        ];

        $this->view("pages/index", $data);
    }

    public function about()
    {
        $data = ["title" => "About"];
        $this->view("pages/about", $data);
    }
}
