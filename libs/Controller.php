<?php
/**
 * Created by PhpStorm.
 * User: Dulaj
 * Date: 15-Nov-17
 * Time: 8:23 AM
 */

class Controller
{
    function __construct()
    {
        echo "Main Controller Library constructor is executing.. " ."<br> ";
        $this->view = new View();


    }

    function index()
    {
        //indexing
    }


    function loadmodel($name)
    {
        $file = 'models/' .$name .'_model.php';

        if(file_exists($file))
        {
            require $file;
            $model_name = $name .'_Model';
            $this->model = new $model_name();
        }
    }


}