<?php

require 'vendor/autoload.php';

use myns\config\Router;

$obj = new Router();//запускаю роутер
$obj->run();

