
<?php

session_start();
require_once 'router.php';
require_once 'autoloader.php';
$router = new Router();
$router->define([
    'GET'=>[
        ''=>'controller/HomeController.php',
        'home'=>'controller/HomeController.php',
        'product/add'=>'controller/ProductAddController.php',
        'product/edit'=>'controller/ProductEditController.php',
        'product/delete'=>'controller/ProductDeleteController.php',
    ],
    'POST'=>[
        'product/create'=>'controller/ProductCreateController.php',
        'product/update'=>'controller/ProductUpdateController.php',
    ]
]);
if(isset($_GET['url'])){
    // remove crud_oop/ from the uri
    $uri = trim($_GET['url'],'/');
    $method = $_SERVER['REQUEST_METHOD'];
    try{
        require_once $router->direct($uri,$method);
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

?>

