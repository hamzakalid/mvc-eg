<?php

namespace HMVC\controllers ;

use HMVC\core\controller;

class homecontroller extends controller{
    
    public function index()
    {

        $Data = $this->db()->rows("SELECT `username` FROM `accounts`");
        // echo "<pre>";
        // print_r($Data);die;


        $param=[
            'title' => 'home index',
            'h1' => 'hamza khaled',
            'users' => $Data
        ];
        $this->views("\home\index",$param);
    }
    public function user()
    {
        echo' hello world........';
    }


}