<?php
/**
 * Created by PhpStorm.
 * User: Dulaj
 * Date: 27-Nov-17
 * Time: 10:02 AM
 */

class Login_Model extends Model
{

    public function test()
    {
        echo "Login_Model -> Test()";
    }


    function setmsg($msg = "Login_Model sent a message ")
    {
        return $msg;
    }


}