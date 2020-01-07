<?php
class Product {
    public $id;
    public $nameProduct;
    public $price;
    public $desProduct;

    public function __construct($nameProduct, $price , $desProduct)
    {
        $this->nameProduct = $nameProduct;
        $this->price = $price;
        $this->desProduct = $desProduct;
    }
}
?>