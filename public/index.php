<?php

//====================[Defind The Directories]====================

define("DS",DIRECTORY_SEPARATOR);  //the separator bettwen the directories

define("ROOT",dirname(__DIR__));    #TO Get The Root Directory

define("APP",ROOT.DS."app");

define("CONFIG",APP.DS."config");

define("CONTROLLER",APP.DS."controller");

define("CORE",APP.DS."core");

define("MODELS",APP.DS."models");

define("VIEWS",APP.DS."views");

//===============================================================


//================[Defind The settinig of website]==================

define("SERVER","  localhost");  #the sever name

define("DOMAIN","http://mvc-eg.test/");    #the domain name

define("USERNAME","root"); #DataBase user

define("PASS","");  #DataBase Password

define("DB","");    #DataBase Name

define("DB_TYPE","mysql");  #DataBase Type

define("PORT",3306);  #DataBase Type

//===============================================================


//the outoload file from composer 

require_once("../vendor/autoload.php");

$app =new HMVC\core\app();