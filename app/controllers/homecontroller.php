<?php

namespace HMVC\controllers ;

use HMVC\core\controller;
use HMVC\models\user;

class homecontroller extends controller{
    
    public function index()
    {

        $param=[
            'title' => 'home index',
            'h1' => 'hamza khaled'
        ];
        
        $this->views("\home\index",$param);
    }

    public function user()
    {
        echo' hello world........';
    }


}