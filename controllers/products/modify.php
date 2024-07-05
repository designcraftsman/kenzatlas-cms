<?php 

require_once('../../models/productsController.php');
function modify($id){
    $productRepository = new ProductRepository();
    $productRepository->connection = new DatabaseConnection();
    $produit = $productRepository->getProduct($id);
    $productRepository->modifyProduct($id);
    require ('../../views/products/modify.php');
}


 

