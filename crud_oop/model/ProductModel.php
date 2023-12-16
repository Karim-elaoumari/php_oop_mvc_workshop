<?php
class ProductModel{
    private $connection;
    private $products = [];
    public function __construct()
    {
        $this->connection = new Connection();
    }
    public function getProducts(){
        
            $query = $this->connection->getCon()->query("SELECT p.id as product_id,p.name as product_name ,p.description,p.price,c.name as category_name,p.quantity,c.id as category_id FROM  products p INNER JOIN category c ON p.category_id = c.id ");
            $products = $query->fetchAll(PDO::FETCH_ASSOC);
            if(empty($products)){
                return [];
            }else{
                foreach ($products as $product) {
                    $category = new Category($product['category_id'],$product['category_name'],null);
                    $product = new Product($product['product_id'],$product['product_name'],$product['price'],$product['quantity'],$product['description'],$category);
                    array_push($this->products,$product);
                }
                return $this->products;
            }
        
    }
    public function createProduct($product){
        echo $product->getName();
        $query = $this->connection->getCon()->prepare("INSERT INTO prodcts(name,price,quantity,description,category_id) VALUES(:name,:price,:quantity,:description,:category_id)");
        $query->bindValue(':name', $product->getName());
        $query->bindValue(':price', $product->getPrice());
        $query->bindValue(':quantity', $product->getQuantity());
        $query->bindValue(':description', $product->getDescription());
        $query->bindValue(':category_id', $product->getCategory()->getId());
        $query->execute();
    }
    public function getProductById($id){
        $query = $this->connection->getCon()->prepare("SELECT p.id as product_id,p.name as product_name ,p.description,p.price,c.name as category_name,p.quantity,c.id as category_id FROM  products p INNER JOIN category c ON p.category_id = c.id WHERE p.id = :id");
        $query->bindValue(':id', $id);
        $query->execute();
        $product = $query->fetch(PDO::FETCH_ASSOC);
        $category = new Category($product['category_id'],$product['category_name'],null);
        $product = new Product($product['product_id'],$product['product_name'],$product['price'],$product['quantity'],$product['description'],$category);
        return $product;
    }
    public function updateProduct($product){
        $query = $this->connection->getCon()->prepare("UPDATE products SET name = :name,price = :price,quantity = :quantity,description = :description,category_id = :category_id WHERE id = :id");
        $query->bindValue(':id', $product->getId());
        $query->bindValue(':name', $product->getName());
        $query->bindValue(':price', $product->getPrice());
        $query->bindValue(':quantity', $product->getQuantity());
        $query->bindValue(':description', $product->getDescription());
        $query->bindValue(':category_id', $product->getCategory()->getId());
        $query->execute();
    }
    public function deleteProduct($id){
        $query = $this->connection->getCon()->prepare("DELETE FROM products WHERE id = :id");
        $query->bindValue(':id', $id);
        $query->execute();
    }
}