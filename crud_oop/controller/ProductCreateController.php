<?php

if(isset($_POST['create'])){


    $productModel = new ProductModel();
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $category_id = $_POST['category_id'];
    


    $category = new Category($category_id,null,null);
    $product = new Product(null,$name,$price,$quantity,$description,$category);
    try{
        $productModel->createProduct($product);
        $_SESSION['message'] = 'Product created successfully';
        header('Location: /crud_oop');
    }catch(PDOException $e){
        $_SESSION['message'] = 'Error creating product';
        header('Location: /crud_oop/product/add');
    }
    

}
