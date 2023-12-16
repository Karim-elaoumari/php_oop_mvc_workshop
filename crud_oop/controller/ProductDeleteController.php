<?php


$productModel = new ProductModel();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    try{

        $product = $productModel->getProductById($id);
        if($product == null){
            $_SESSION['message'] = 'Product not found';
            header('Location: /crud_oop');
        }else{
            $productModel->deleteProduct($id);
        }
        $_SESSION['message'] = 'Product deleted successfully';
        header('Location: /crud_oop');
    }catch(PDOException $e){
        $_SESSION['message'] = 'Error deleting product';
        header('Location: /crud_oop');
    }

    
}else{
    $_SESSION['message'] = 'Product id missing';
    header('Location: /crud_oop');
}