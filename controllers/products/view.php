<?php 

require_once('../../models/productsController.php');

function view($id){
    $productRepository = new ProductRepository();
    $productRepository->connection = new DatabaseConnection();
    $produit = $productRepository->getProduct($id);
    require ('../../views/products/view.php');
}


