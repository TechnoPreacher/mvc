<?php


namespace myns\config;

use myns\controllers\ErrorController;//404

class Router
{

    function __construct()
    {

        if (isset($_GET['url']))//если нашелся урл - обрабатываю
        {
            $url = $_GET['url'];//получаю урл
            $url = explode('/', $url);//превращаю в массив и нулевым элементом будет искомыф контроллер

            $params = $_GET;//массив параметров
            unset($params['url']);//убиваю урл чтоб оставить только параметры
            ?>
            <pre> <?php //var_dump($url[0]);
                ?> </pre> <?php

            $classSpace = "myns\controllers\\" . $url[0] . "\\" . $url[0] . "Controller";//имя класса

            if (class_exists($classSpace))
            {
                new $classSpace($params);//нашел контроллр - подключаю
            }
            else
                new ErrorController();//не нашед - даю 404

        } else //если не было пути - говорю что ничего нет и 404 (хз нужна ли она тут...)
        {
            echo "url is empty" . '</br>';
            $controller = new ErrorController();
        }

    }
}