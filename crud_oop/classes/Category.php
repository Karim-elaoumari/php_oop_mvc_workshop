<?php
class Category
{
    private $id;
    private $name;
    private $products = [];


    public function __construct($id,$name, $products)
    {
        $this->id = $id;
        $this->name = $name;
        $this->products = $products;
    }
    

    public function setName($name)
    {
        return  $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setProducts( $products)
    {
        return $this->products = $products;
    }
    public function getProducts()
    {
        return $this->products;
    }
    public function setId($id)
    {
        return  $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

}
?>