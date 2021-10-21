<?php
require 'vendor/autoload.php';

use myns\config\Router;



$obj = new Router();

/*

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
unset($ar);*/