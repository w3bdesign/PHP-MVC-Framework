<?php
/*
 Base controller
 Loads the models and the views
*/

class Controller
{
    // Load model
    public function model($model)
    {
        // Require model file
        require_once "../app/models" . $model . ".php";
        // Init model
        return new $model();
    }

    // Load view
    public function view($view, $data = [])
    {
        // Check for view file
        if (file_exists("../app/views/" . $view . ".php")) {

            require_once "../app/views/" . $view . ".php";
        } else {
            throw new Error("View " .  $view . " does not exist");
        }
    }
}
