<?php

namespace eBaocd\Router;

class Router
{
    public static $error_callback;
    
    public static function __callstatic($name, $params)
    {
        if($name == 'req')
        {
            self::display();
        }
    }
    
    public function display()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
        print_r($uri);
    }
    
    public static function error($callback) 
    {
        self::$error_callback = $callback;
    }
}
