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
        $url = $_GET['url'];

        $url = rtrim($url, '/');

        $url = explode('/', $url);





        //print_r($url);

        echo "<br>" . $url[0] . ":";






        $file = 'controllers/' . $url[0] . '.php';


        if(file_exists($file)){
            require $file;

        }else{
            require 'controllers/errorHandler.php';
            $controller = new ErrorHandler();
            return false;
        }

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