<?php
/**
 * Created by PhpStorm.
 * User: Dulaj
 * Date: 26-Nov-17
 * Time: 2:21 AM
 */

class Login extends Controller
{

    /**
     * Login constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->view->render('login/index');
    }
}