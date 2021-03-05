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

//the outoload file from composer 

require_once("../vendor/autoload.php");

$app =new HMVC\core\app();