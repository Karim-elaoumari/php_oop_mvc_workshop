<?php

$productModel = new ProductModel();
$products = $productModel->getProducts();
$page = 'views/home.php';
require_once 'views/main.php';
?>

