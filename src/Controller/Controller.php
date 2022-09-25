<?php

namespace App\Controller;

use Exception;

class Controller
{
    public function view($view, $data = [])
    {
        $file = "../src/views/{$view}.php";
        
        if (file_exists($file)) {
            require_once $file;
        } else {
            throw new Exception("Error Processing Request", 1);
        }
    }
}