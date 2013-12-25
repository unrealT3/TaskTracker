<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 18/12/13
 * Time: 8:19 PM
 */

class SignupController extends BaseController{

    function __construct(){
        parent::__construct("signup");
    }

    function index(){
        $this->view->render("signup/signup");

    }

    function run(){

    }
} 