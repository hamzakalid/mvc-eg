<?php

namespace HMVC\core;

use Dcblogdev\PdoWrapper\Database;

class controller {

    //this function use to show and detemine the view 
    public function views($path,$param)
    {
        extract($param);    #this function use to convet the array items to variables 'a'=>2 becomes $a =2
        require_once(VIEWS.$path.".php");
    }

    //the database connection
    public function db()
    {
        $options = [
            //required
            'username' => 'root',
            'database' => 'dbcvgen',
            //optional
            'password' => '',
            'type' => 'mysql',
            'charset' => 'utf8',
            'host' => 'localhost',
            'port' => '3306'
        ];
        
        // $db = new Database($options);
        return  new Database($options); 
    }

}