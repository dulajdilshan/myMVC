<?php
/**
 * Created by PhpStorm.
 * User: Dulaj
 * Date: 25-Nov-17
 * Time: 8:47 AM
 */

class View
{
    function __construct()
    {
        echo 'This is view' ;
    }

    public function render($name)
    {
        require 'views/' .$name .'.php';
        //$t = new $name;
    }
}