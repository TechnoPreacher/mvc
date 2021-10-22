<?php

namespace myns\controllers\home;

class HomeController
{
    public function __construct(array $params=[])
    {
        echo "welcome to Home".'</br>'.'</br>';
        if (is_array($params)) {
            foreach ($params as $k => $v) {
                echo "param: " . $k . "==>" . $v . '</br>';
            }
        }
    }
}
