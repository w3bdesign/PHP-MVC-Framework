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
        // print_r($this->getUrl());
        $url = $this->getUrl();
        // Check if controller exists in controllers folder
        if (file_exists("../controllers/" . ucwords($url[0]) . ".php")) {
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }
    }

    public function getUrl()
    {
        // ? Improve with Regex
        $url = filter_input(INPUT_SERVER, 'QUERY_STRING', FILTER_SANITIZE_URL);
        if (isset($url)) {
            $url = rtrim($url, "/");
            $url = explode("/", $url);
            return $url;
        }
    }
}
