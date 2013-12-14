<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 14/12/13
 * Time: 3:50 PM
 */

class ObjectAccessor {
    protected $user;
    protected $page;
    protected $db;

    function __construct(){
        $this->page = new PageObject();
    }

    public function getPageObject(){
        return $this->page;
    }

    public function setPageObjectTitle($name){
        $this->page->setTitle($name);
    }
} 