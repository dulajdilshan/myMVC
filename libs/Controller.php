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
}