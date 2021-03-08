<?php
//model class
namespace HMVC\core;

use Dcblogdev\PdoWrapper\Database;


class model{

//the database connection
    static function db()
    {
        $options = [
            //required
            'username' => ROOT,
            'database' => DB,
            //optional
            'password' => PASS,
            'type' => DB_TYPE,
            'charset' => 'utf8',
            'host' => SERVER,
            'port' => PORT
        ];
        
        // $db = new Database($options);
        return  new Database($options); 
    }

}