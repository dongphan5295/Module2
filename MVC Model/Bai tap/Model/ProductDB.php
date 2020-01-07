<?php
class ProductDB {
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll(){
        $sql = "SELECT * FROM product";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $products = $statement->fetchAll(PDO::FETCH_OBJ);


    }

    public function get($id){
        $sql = "SELECT * FROM product WHERE id = :id";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(':id', $id);
        $stm->execute();
        return $product = $stm->fetch(PDO::FETCH_OBJ);
    }

    public function create($product) {
        $sql = "INSERT INTO product(nameProduct, price, desProduct) VALUES(:nameProduct, :price, :desProduct)";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(':nameProduct', $product->nameProduct);
        $stm->bindParam(':price', $product->price);
        $stm->bindParam(':desProduct', $product->desProduct);
        return $stm->execute();

    }

    public function delete($id){
        $sql = "DELETE FROM product WHERE id = :id";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(':id', $id);
        return $stm->execute();
    }

    public function update($id, $product){
        $sql = "UPDATE product SET nameProduct = :nameProduct, price = :price, desProduct = :desProduct WHERE id = :id ";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(':id', $id);
        $stm->bindParam(':nameProduct', $product->nameProduct);
        $stm->bindParam(':price', $product->price);
        $stm->bindParam(':desProduct', $product->desProduct);
        return $stm->execute();
    }

    public function search($key) {
        $sql = "SELECT * FROM product WHERE nameProduct LIKE ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $key);
        $stm->execute();
        return $products = $stm->fetchAll(PDO::FETCH_OBJ);
    }

    public function view($id){
        $sql = "SELECT * FROM product WHERE id = :id";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(':id', $id);
        $stm->execute();
        return $product = $stm->fetch(PDO::FETCH_OBJ);
    }

    
}


?>