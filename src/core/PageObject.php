<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 14/12/13
 * Time: 3:54 PM
 */

class PageObject {
    public $pageTitle;
    function __construct(){

    }

    function setTitle($name){
        $this->pageTitle = $name;
    }
} 