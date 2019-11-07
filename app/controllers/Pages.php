<?php

declare(strict_types=1);

class Pages extends Controller
{
    public function __construct()
    {
        $this->postModel = $this->model("Post");
    }

    public function index()
    {
        $data = ["title" => "Welcome"];
        $this->view("pages/index", $data);
    }

    public function about()
    {
        $data = ["title" => "About"];
        $this->view("pages/about", $data);
    }
}
