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
        return $this->getUrl();
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
