<?php
$categoryModel = new CategoryModel();
$categories = $categoryModel->getCategories();

$page = 'views/addProduct.php';
require_once 'views/main.php';