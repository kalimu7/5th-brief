<?php

    require '../app/core/connection.php';
   
    class ProductModel extends Connection{
        public $destination;
        public $price;
        public $description;
        // public $image;

        public function insert($destination,$description,$price,$image){
            $check = mysqli_query($this->connect(),"INSERT INTO `travel` (`id`, `destination`, `price`, `description`, `image`) VALUES (NULL, '$destination', '$description', '$price', '$image')");
            
        }
    }
    
?>