<?php

$productModel = new ProductModel();


if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];
    $category = new Category($category_id,null,null);
    $product = new Product($id,$name,$price,$quantity,$description,$category);
    try{
        $productExist = $productModel->getProductById($id);
        if($productExist == null){
            $_SESSION['message'] = 'Product not found';
            header('Location: /crud_oop');
        }
        $productModel->updateProduct($product);
        $_SESSION['message'] = 'Product updated successfully';
        header('Location: /crud_oop');
    }catch(PDOException $e){
        $_SESSION['message'] = 'Error updating product';
        header('Location: /crud_oop');
    }
}else{
    $_SESSION['message'] = 'Product request missing';
    header('Location: /crud_oop');
}