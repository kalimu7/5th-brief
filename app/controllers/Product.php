<?php

require_once '../app/core/Controller.php';
class Product extends Controller{

    public function productForm(){
        $this->view("home/add");
    }

    public function addProduct(){
       
        if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {
            header('location: '.BASE_URL.'product/productform');
            exit;
        }

        $destination = $_POST['dest'];
        $description = $_POST['desc'];
        $price = $_POST['price'];
        
        $model = $this->model('ProductModel');
        $model->insert($destination,$description,$price);
        header('location: '.BASE_URL.'product/productform');

    }

}