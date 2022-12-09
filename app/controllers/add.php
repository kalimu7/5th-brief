<?php
    
    require_once '../app/core/Controller.php';

    class add extends controller{

        // public function __construct(){
        //     //$this->modelPorduct = $this->model('add');
        // }
        // public $modelProduct;
        public function ajoute(){
            
            if(isset($_POST['submit'])){
                
                
                $dest = $_POST['dest'];
                 $desc = $_POST['desc'];
                $price = $_POST['price'];
                $this->modelPorduct = $this->model('add');
                $this->moodelProduct -> insert($dest,$desc,$price);
                // $this->moodelProduct ->insert($dest,$desc,$price);
                
            }
           
            $this->view('home/add');
        } 
        
    }

?>