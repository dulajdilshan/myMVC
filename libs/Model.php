<?php
/**
 * Created by PhpStorm.
 * User: Dulaj
 * Date: 27-Nov-17
 * Time: 9:50 AM
 */

class Model
{

    /**
     * Model constructor.
     */

    public function __construct()
    {
        $this->db = new Database();
    }
}