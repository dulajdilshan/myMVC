<?php
/**
 * Created by PhpStorm.
 * User: Dulaj
 * Date: 11-Nov-17
 * Time: 9:38 AM
 */

class Help extends Controller
{

    function __construct()
    {
        echo " help controller constructor is executing" ."<br>";
        //echo "<br>" ."Help";
    }

    function something($arg=false)
    {
        echo " > Something";
        echo ">" .$arg;
    }

    function other($arg = false)
    {
        echo "Other function of Help Controller is executing.." . "<br>";
        echo 'Optional: ' . $arg . '<br/>';
        require 'models/help_model.php';
        $model = new Help_Model();
    }
}