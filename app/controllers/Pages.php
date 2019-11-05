<?php
class Pages extends Controller
{
    public function __construct()
    { }

    public function index()
    {
        //die("Index from Pages");
        $this->view("hello");
    }
}
