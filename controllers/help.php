<?php
/**
 * Created by PhpStorm.
 * User: Dulaj
 * Date: 11-Nov-17
 * Time: 9:38 AM
 */

class Help{

    function __construct()
    {
        echo " We are in the help page " ;
        echo "<br>" ."Help";
    }

    function something($arg =false)
    {
        echo " > Something";
        echo ">" .$arg;
    }
}