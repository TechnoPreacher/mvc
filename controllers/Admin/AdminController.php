<?php

namespace myns\controllers\admin;

class AdminController
{
public function __construct(array $params=[])
{
    echo "welcome to Admin".'</br>'.'</br>';
    if (is_array($params)) {
      foreach ($params as $k => $v) {
            echo "param: " . $k . "==>" . $v . '</br>';
        }
    }
}

}