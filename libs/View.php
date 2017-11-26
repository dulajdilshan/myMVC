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
        echo 'View library constructor is executing' ."<br>" ;
    }

    public function render($name)
    {
        require 'views/header.php';
        echo "<hr/>";
        require 'views/' .$name .'.php';
        echo "<hr/>";
        require 'views/footer.php';
        //$t = new $name;
    }
}