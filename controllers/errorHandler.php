<?php
/**
 * Created by PhpStorm.
 * User: Dulaj
 * Date: 14-Nov-17
 * Time: 9:56 AM
 */

class ErrorHandler extends Controller
{
    /**
     * Error constructor.
     */

    public function __construct()
    {
        parent::__construct();
        echo "This is an error";
    }
}