<?php

namespace HMVC\core;


class controller {

    //this function use to show and detemine the view 
    public function views($path,$param)
    {
        extract($param);    #this function use to convet the array items to variables 'a'=>2 becomes $a =2
        require_once(VIEWS.$path.".php");
    }

    

}