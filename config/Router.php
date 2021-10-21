<?php


namespace myns\config;

use myns\controllers\ErrorController;
use myns\controllers\admin\AdminController;
use myns\controllers\home\HomeController;

class Router
{


    function __construct()
    {
        ?><pre> <?php

                var_dump($_GET);
                ?> </pre> <?php

        if (isset($_GET['url']))
        {
            $url = $_GET['url'];//получаю урл


            $controller = 0;


            $ar = explode('/', $url);//забираю массив

            ?>
            <pre> <?php

            //    var_dump($ar);
                ?> </pre>
            <?php
            //echo '</br>'.$url;

            ?>
          //  <pre> <?php   if (isset($_GET['url']))
                //var_dump($ar);
          ?> </pre>
            //<?php


            $findController = 0;


            foreach ($ar as $v) {
                if ($v == "admin") {
                    $controller = new AdminController(serialize($v));
                    $findController = 1;
                    break;
                }

                if ($v == "home") {
                    $controller = new HomeController();
                    $findController = 1;
                    break;
                }


            }

             if (0==$findController)
              {
                  $controller = new ErrorController();
              }


        } else echo "url is empty";

        unset($controller);
        unset($ar);

    }


}