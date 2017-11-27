<?php
/**
 * Created by PhpStorm.
 * User: Dulaj
 * Date: 25-Nov-17
 * Time: 6:42 PM
 */

class Help_Model extends Model
{

    /**
     * Help_Model constructor.
     */
    public function __construct()
    {
        parent::__construct();
        echo "Help_model constructor is executing" .'<br>';
    }


    function setmsg($msg = "Help_Model sent a message ")
    {
        return $msg;
    }
}