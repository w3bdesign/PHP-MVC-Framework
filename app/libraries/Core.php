<?php

/*
* App Core Class
* Creates URL and loads core controller
* URL format = /controller/method/params
*/

class Core
{
    protected $currentController = "Pages";
    protected $currentMethod = "index";
    protected $params = [];

    public function __construct()
    {
        print_r($this->getUrl());
    }

    public function getUrl()
    {
        // TODO Improve with Regex
        //if (isset($_GET["url"])) {
        //if (isset($_SERVER['QUERY_STRING'])) {
        $url = filter_input(INPUT_SERVER, 'QUERY_STRING', FILTER_SANITIZE_URL);
        $url = rtrim($_GET["url"], "/");
        $url = explode("/", $url);
        return $url;
    }
}
