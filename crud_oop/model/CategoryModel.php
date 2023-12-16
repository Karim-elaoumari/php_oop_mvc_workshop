<?php
class CategoryModel{
    private $connection;
    private $categories = [];
    public function __construct()
    {
        $this->connection = new Connection();
    }
    public function getCategories(){
            $query = $this->connection->getCon()->query("SELECT * FROM category");
            $categories = $query->fetchAll(PDO::FETCH_ASSOC);
            if(empty($categories)){
                return [];
            }else{
                foreach ($categories as $category) {
                    $category = new Category($category['id'],$category['name'],null);
                    array_push($this->categories,$category);
                }
                return $this->categories;
            }
    }
}