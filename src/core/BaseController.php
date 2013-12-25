<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 14/12/13
 * Time: 2:57 PM
 */

class BaseController {
    protected $objectAccessor;
    function __construct($modelName){
        $this->view = new View();
        $this->objectAccessor = new ObjectAccessor();
        //$this->modelFactory = new ModelFactory();
        $this->model = new SignupModel;


    }

} 