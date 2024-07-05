<?php 

require_once('../../models/productsController.php');
function delete($id){
    $productRepository = new ProductRepository();
    $productRepository->connection = new DatabaseConnection();
    $productRepository->deleteProduct($id);	
}
