<?php 

require ('../../src/productsController.php') ;

$produits = getProducts();

 require ('../../templates/products/products.php');

