<?php
// use Model\Product;
// use Model\ProductDB;
// use Model\DBConnection;

class ProductController
{
    public $productDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=test", "root", "");
        $this->productDB = new ProductDB($connection->connect());
    }

    public function index()
    {
        $products = $this->productDB->getAll();
        include 'View/list.php';
    }

    public function Add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include "View/add.php";
        } else {
            $nameProduct = $_POST['nameProduct'];
            $price = $_POST['price'];
            $desProduct = $_POST['desProduct'];

            $product = new Product($nameProduct, $price, $desProduct);
            $this->productDB->create($product);
            header('location: index.php');
            include_once 'View/add.php';
        }
    }

    public function Destroys()
    {
      if ($_SERVER['REQUEST_METHOD'] === 'GET') {
          $id = $_GET['id'];
          $product = $this->productDB->get($id);
          include 'View/delete.php';
      } else {
          $id = $_POST['id'];
          $this->productDB->delete($id);
          header('Location: index.php');
      }

    }

    public function Edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include 'View/edit.php';
        } else {
            $id = $_POST['id'];
            $product = new Product($_POST['nameProduct'], $_POST['price'], $_POST['desProduct']);
            $this->productDB->update($id, $product);
            header('Location: index.php');
        }
    }

    public function Search()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $key = "{$_POST['tukhoa']}%";
            // $key = trim($key);
            $products = $this->productDB->search($key);
            include 'view/search.php';
        }
    }

    public function View(){
        $id = $_GET['id'];
        $product = $this->productDB->get($id);
        include 'view/view.php';
    }
}
