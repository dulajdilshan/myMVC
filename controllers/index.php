<?php
/**
 * Created by PhpStorm.
 * User: Dulaj
 * Date: 09-Nov-17
 * Time: 6:12 PM
 */


class Index extends Controller {

    function __construct(){
        parent::__construct();
        echo "Index Controller constructor is executing";

    }

    function index()
    {
        $this->view->msg = "index/index is loading";
        $this->view->render('index/index');
    }
}


