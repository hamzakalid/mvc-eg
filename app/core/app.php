<?php

namespace HMVC\core;

class app {

    private $controller = "homecontroller";

    private $method = "index";
    
    private $param;


    function __construct()
    {
        $this->url();
        $this->vender();
    }

    //Read the Url
    private function url(){
        
        if(!empty($_SERVER['REDIRECT_URL'])){
            #Store the redirected name in array
            $url = explode('/',$_SERVER['REDIRECT_URL']);   
            // print_r($url);

            /**===NOTE==============================================
             *  The array $url start from 0 put the index [0] is empty So 
             * we will start from the index [1]
             **=====================================================*/

            #determin the controller
            $this->controller = isset($url[1]) ? $url[1]."controller" : "homecontroller";   
            // echo $this->controller;

            #determin the method
            $this->method = isset($url[2]) ? $url[2] : 'index';     
            // echo $this->method;

            #remove the index [0],[1] and [2] from array $url
            unset($url[0],$url[1],$url[2]);     

            #store the rest of redirect urls
            $this->param = array_values($url);
            // print_r($this->param);
            
        }

    }

    private function vender()
    {
        #Select the Controller and Methode and Parameters
        $controllers="HMVC\controllers\\" . $this->controller;  #object of class controller
        if(class_exists($controllers)){
            // echo "class exist";
            $controller = new $controllers;

            if(method_exists($controller,$this->method)){  
                // echo "method exist";
                
                #call the function and send the parameters
                call_user_func([$controller,$this->method],$this->param); 

            }else{
                echo "method not exist";
            }
        }else{
            echo "class not exist";
        }
    }

}