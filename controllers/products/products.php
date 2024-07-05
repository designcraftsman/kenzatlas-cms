<?php 

require ('../../models/productsController.php') ;

function products(){
    $productRepository = new ProductRepository();
    $productRepository->connection = new DatabaseConnection();
    $produits = $productRepository->getProducts();
    require ('../../views/products/products.php');
}
