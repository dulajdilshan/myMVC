<?php
/**
 * Created by PhpStorm.
 * User: Dulaj
 * Date: 14-Nov-17
 * Time: 9:56 AM
 */

class Error_Handler extends Controller
{
    /**
     * Error_Handler constructor.
     */

    public function __construct()
    {
        parent::__construct();
        echo "<br> Error_Handler Controller constructor is executing";

    }

    function index()
    {
        $this->view->msg = "Not Found Error";
        $this->view->render('error/index');
    }

}