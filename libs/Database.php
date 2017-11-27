<?php
/**
 * Created by PhpStorm.
 * User: Dulaj
 * Date: 27-Nov-17
 * Time: 9:52 AM
 */

class Database extends PDO
{

    public function __construct()
    {
        parent::__construct('mysql:host=localhost;dbname=my_mvc','root','');
    }

}