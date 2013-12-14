<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 14/12/13
 * Time: 2:38 PM
 */


class ErrorController extends BaseController{
    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->view->render("error/index");
    }
}