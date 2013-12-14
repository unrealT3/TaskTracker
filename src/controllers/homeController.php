<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 14/12/13
 * Time: 2:14 PM
 */

class HomeController extends BaseController {
    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->objectAccessor->setPageObjectTitle("title");
        $this->view->page = $this->objectAccessor->getPageObject();
        $this->view->render("index/index");
    }
} 