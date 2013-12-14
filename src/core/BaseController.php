<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 14/12/13
 * Time: 2:57 PM
 */

class BaseController {
    protected $objectAccessor;
    function __construct(){
        $this->view = new View();
        if(!isset($this->objectAccessor)){
            $this->objectAccessor = new ObjectAccessor();
        }




    }

} 