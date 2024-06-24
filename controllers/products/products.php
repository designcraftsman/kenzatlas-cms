<?php 

require ('../../models/productsController.php') ;

$produits = getProducts();

 require ('../../views/products/products.php');

