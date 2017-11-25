<?php
/**
 * Created by PhpStorm.
 * User: Dulaj
 * Date: 14-Nov-17
 * Time: 9:44 AM
 */

class Bootstrap
{


    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url']:null;

        $url = rtrim($url, '/');

        $url = explode('/', $url);

        //test
        print_r($url);

        if (empty($url)){
            require 'controllers/index.php';
        }

        echo "Bootstrap library controller is executing.." ."<br>";
        echo "From URL =>" . $url[0] ."<br>";

        $file = 'controllers/' . $url[0] . '.php';


        if(file_exists($file)){
            require $file;

        }else{
            require 'controllers/error_handler.php';
            $controller = new Error_Handler();
            return false;
        }


//controller
        $controller = new $url[0];

        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
        }
    }
}