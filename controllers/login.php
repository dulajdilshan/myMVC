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
        echo "Login Controller constructor is executing .." ."<br>";
    }

    function index()
    {
        $name = 'login';
        parent::loadmodel($name);
        $model = new Login_Model();
        $this->view->blah = $model->test();
        $this->view->render('login/index');
    }
}