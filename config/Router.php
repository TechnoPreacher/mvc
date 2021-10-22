<?php


namespace myns\config;

use myns\controllers\ErrorController;

//404

class Router
{

    protected $controller;
    protected $method;

    function __construct()
    {

        $this->init();
    }

    public function init()
    {

            if (!empty($_SERVER['REDIRECT_URL']))//если не пустой урл - обрабатываем
            {
                $path = explode('/', $_SERVER['REDIRECT_URL']);
                $this->controller = (!empty($path[1])) ? $path[1] : 'Index';
                $this->method = (!empty($path[2])) ? $path[2] : 'index';
            }

    }

    public function run()
    {
        $className = 'myns\controllers\\' . ucfirst($this->controller) . "\\" . ucfirst($this->controller) . "Controller";
        $methodName = $this->method;
        if (class_exists($className)) {
            $obj = new $className;
            if (method_exists($obj, $methodName)) {
                return $obj->$methodName();
            } else { new ErrorController();}
        } else { //классов не нашли - значит нужно плюнуть 404

            if (!isset($_SERVER['REDIRECT_URL'])) {
                echo "ROOT PAGE";
            } else
             new ErrorController();
        }
    }


    /*    ?> <pre> <?php //var_dump($_SERVER["REDIRECT_URL"]);
        ?> </pre> <?php
        if (isset($_SERVER['REDIRECT_URL']))//если нашелся урл - обрабатываю
        {
            $url = ltrim($_SERVER['REDIRECT_URL'],'//');//получаю урл c удалённым слешем (экранирован)
            //echo $url;
            //$url = explode('/', $url);//превращаю в массив и нулевым элементом будет искомы контроллер
            $params = $_GET;//массив параметров
            unset($params['url']);//убиваю урл чтоб оставить только параметры
            ?>
            <pre> <?php //var_dump($url[0]);
                ?> </pre> <?php

            $classSpace = "myns\controllers\\" . $url . "\\" . $url . "Controller";//имя класса

            echo $classSpace;

            if (class_exists($classSpace))
            {
                new $classSpace($params);//нашел контроллр - подключаю
            }
            else
                new ErrorController();//не нашед - даю 404

        } else //если не было пути - говорю что ничего не
        {
            echo "url is empty" . '</br>';

        }
  */


}