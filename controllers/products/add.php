<?php 

require_once('../../models/productsController.php');
function add(){
    $productRepository = new ProductRepository();
    $productRepository->connection = new DatabaseConnection();
    $productRepository->addProduct();
     require ('../../views/products/add.php');
}
