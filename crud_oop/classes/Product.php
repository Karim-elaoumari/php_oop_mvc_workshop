<?php
class Product
{
    private  $name;
    private  $price;
    private  $quantity;
    private  $description;
    private  $category;

    public function __construct($id, $name, $price, $quantity, $description, $category)
    {
        $this->id = $id;                
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->category = $category;
    }
    public function setId( $id)
    {
        return  $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setName( $name)
    {
        return  $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPrice( $price)
    {
        return $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setQuantity( $quantity)
    {
        return $this->quantity = $quantity;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setDescription( $description)
    {
        return $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setCategory( $category)
    {
        return $this->category = $category;
    }
    public function getCategory()
    {
        return $this->category;
    }


}
?>
