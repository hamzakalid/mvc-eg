<?php


namespace HMVC\controllers ;

use HMVC\core\controller;

class logincontroller extends controller{

    public function login()
    {
        $this->views("\login\login",[]);
    }

}