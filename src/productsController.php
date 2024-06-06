<?php 

    function getProducts(){
    try {
    	$database = new PDO('mysql:host=localhost;dbname=kenzltry_kenzatlas;charset=utf8', 'kenzltry_mariamFayz', 'kenzatlas2024');
	} catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
	}
    $statement = $database->query(
    	"SELECT * FROM produit ORDER BY idProduit DESC"
	);
	$produits = [];
	while (($row = $statement->fetch())) {
    	$produit = [
            'id'=> $row['idProduit'],
        	'nom' => $row['nomProduit'],
        	'prix' => $row['prixProduit'],
            'image'=>$row['imageProduit1'],
    	];

    	$produits[] = $produit;
	}
    return $produits;
    }
