<?php

namespace HMVC\models;


use HMVC\core\model;

// use models;


class user extends model{

    public function getAllUsers()
    {
        $Data = model::db()->rows("SELECT `username` FROM `accounts`");
        return $Data;
    }

}