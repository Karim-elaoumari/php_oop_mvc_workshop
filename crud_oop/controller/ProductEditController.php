<?php

$productModel = new ProductModel();
$categoryModel = new CategoryModel();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    try{
        $product = $productModel->getProductById($id);
        if($product == null){
            $_SESSION['message'] = 'Product not found';
            header('Location: /crud_oop');
        }else{
            $categories = $categoryModel->getCategories();
            $page = 'views/editProduct.php';
            require_once 'views/main.php';
        }
    }catch(PDOException $e){
        $_SESSION['message'] = 'Error getting product';
        header('Location: /crud_oop');
    }
}else{
    $_SESSION['message'] = 'Product id missing';
    header('Location: /crud_oop');
}