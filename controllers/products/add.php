<?php 

require_once('../../models/productsController.php');
function add(){
    $productRepository = new ProductRepository();
    $productRepository->connection = new DatabaseConnection();
     require ('../../views/products/add.php');
     $productRepository->addProduct();
}
