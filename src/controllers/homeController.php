<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 14/12/13
 * Time: 2:14 PM
 */

/**
 * Class HomeController
 *
 * Access to
 * $objectAccessor - object used to access model objectd
 * $view - the view object
 */
class HomeController extends BaseController {
    function __construct(){
        parent::__construct();


    }

    public function index(){
        $this->objectAccessor->setPageObjectTitle("title");
        $this->view->page = $this->objectAccessor->getPageObject();
        $this->view->render("index/index");
        echo $this->objectAccessor->poop;
    }
}

