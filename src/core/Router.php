<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 14/12/13
 * Time: 1:41 PM
 */

class Router {
    function __construct(){

        $this->fileLoader = new FileLoader();
    }

    public function doesRouteExist(Array $url){

        $controller = $url[0];
        $method = (isset($url[1])) ? $method = $url[1] : $method = null;
        $argument = (isset($url[2])) ? $argument = $url[2] : $argument = null;




        if(isset($argument)){
            if($this->fileLoader->checkFileExists($controller, 'controller')){
                $this->fileLoader->loadControllerFile($controller);
                if(class_exists($controller)){
                    if(method_exists($controller, $method)){
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
            }else
            {
                $this->badRoute();
                return false;
            }

        }else if(isset($method)){
            if($this->fileLoader->checkFileExists($controller, 'controller')){
                $this->fileLoader->loadControllerFile($controller);
                if(class_exists($controller)){
                    if(method_exists($controller, $method)){
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
            } else{
                $this->badRoute();
                return false;
            }
        }else if(isset($controller)){

            if($this->fileLoader->checkFileExists($controller, 'controller')){
                $this->fileLoader->loadControllerFile($controller);
                if(class_exists($controller)){
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else{

                $this->badRoute();
                return false;
            }
        }


    }

    public function badRoute(){
        $this->fileLoader->loadControllerFile("errorController");
    }
} 