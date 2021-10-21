<?php
require 'vendor/autoload.php';


use myns\config\Router;
//use myns\core\subfolder\SecondClass;
use myns\controllers\ErrorController;
use myns\controllers\admin\AdminController;
use myns\controllers\home\HomeController;



$obj = new Router();




echo $obj->run().' - это работа метода класса из config/</br>';

//echo 'а это свойство второго класса из config/subfolder:  '. (($obj2 = new SecondClass())->secondClassProperty1).'</br>';

if (isset($_GET['url'])) {
$url = $_GET['url'];
$controller=0;
$ar=explode('/',$url);
?> <pre> <?php
    var_dump($ar); ?> </pre>
<?php
    $findController=0;
foreach ($ar as $v)
{

    //echo $v;
    if ($v=="admin")
    {
        $controller=new AdminController();

        $findController=1; break;
    }

    if ($v=="home")
    {
        $controller=new HomeController();
        $findController=1; break;
    }


}

if (0==$findController)
{
    $controller = new ErrorController();

}


} else echo "url is empty";

unset($controller);
unset($ar);