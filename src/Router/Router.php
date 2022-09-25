<?php

namespace App\Router;

use Exception;

class Router
{
    public $controller = "HomeController";
    public $method = "index";
    public $params = [];

    public function __construct()
    {
        $url = $this->parseURL();

        if (class_exists("App\\Controller\\{$url[0]}")) {
            $this->controller = $url[0];
            unset($url[0]);
        } else {
            header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
            include('../views/not_found.php');
            die();
        }

        $this->controller = "App\\Controller\\{$this->controller}";
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            } else {
                print_r("Method {$url[1]} Not Found");
            }
        }
    }

    protected function parseURL()
    {
        if (! isset($_GET['url'])) {
            $url[0] = 'HomeController';
        } else {
            $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
            $url[0] = "{$url[0]}Controller";
        }
        
        return $url;
    }

    public function run()
    {
        return call_user_func_array([$this->controller, $this->method], $this->params);
    }
}