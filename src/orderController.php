<?php 

    function getOrders(){
    try {
    	$database = new PDO('mysql:host=localhost;dbname=kenzltry_kenzatlas;charset=utf8', 'kenzltry_mariamFayz', 'kenzatlas2024');
	} catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
	}
    $statement = $database->query(
    	"SELECT * FROM commandes  ORDER BY numeroCommande DESC"
	);
	$commandes = [];
	while (($row = $statement->fetch())) {
    	$commande = [
            'numero'=> $row['numeroCommande'],
        	'nom' => $row['nomClient'],
			'prenom'=>$row['prenomClient'],
        	'telephone' => $row['telephoneClient'],
            'date'=>$row['dateCommande'],
    	];

    	$commandes[] = $commande;
	}
    return $commandes;
    }



	function getOrder(){
		try {
			$database = new PDO('mysql:host=localhost;dbname=kenzltry_kenzatlas;charset=utf8', 'kenzltry_mariamFayz', 'kenzatlas2024');
		} catch(Exception $e) {
			die('Erreur : '.$e->getMessage());
		}
		if(!isset($_GET['numero-commande'])){
			echo ("Un erreur est survenue");
		}else{
			$numero = $_GET['numero-commande'];
			$statement = $database->query(
				"SELECT * FROM commandes  WHERE numeroCommande = $numero"
			);

			$row = $statement->fetch();
				$commande = [
					'numero'=> $numero,
					'idClient' => $row['idUtulisateur'],
					'date'=>$row['dateCommande'],
					'nom' => $row['nomClient'],
					'prenom'=>$row['prenomClient'],
					'adresse'=>$row['adresseClient'],
					'telephone'=>$row['telephoneClient'],
					'codePostal'=>$row['codePostalClient'],
					'ville'=>$row['villeClient'],
					'noteCommande'=> $row['noteCommandeClient'],
					'statut'=> $row['statutCommande'],
				];
				
	
				
			return $commande;
		}
	}

	function getOrderDetails(){
		try {
			$database = new PDO('mysql:host=localhost;dbname=kenzltry_kenzatlas;charset=utf8', 'kenzltry_mariamFayz', 'kenzatlas2024');
		} catch(Exception $e) {
			die('Erreur : '.$e->getMessage());
		}
		$numero = $_GET['numero-commande'];
			$statement = $database->query(
				"SELECT * FROM produitscommandés  WHERE numeroCommande = $numero"
			);
			$produitscommandés = [];
			while (($row = $statement->fetch())) {
				$statement = $database->query(
					"SELECT * FROM produit  WHERE idProduit = $row[idProduit]"
				);
				$produit = $statement->fetch();
				$produitcommandé = [
					'numero'=> $row['numeroCommande'],
					'produit' => $produit['nomProduit'],
					'prix'=>$produit['prixProduit'],
					'quantite'=>$row['quantiteCommandés'],
					'prixTotal'=> ((float)$produit['prixProduit'] * (int)$row['quantiteCommandés'])  
				];
				$produitscommandés[] = $produitcommandé;
			}
		return $produitscommandés;	
			
	}

	function getOrderDetailsByNumber($numero){
		try {
			$database = new PDO('mysql:host=localhost;dbname=kenzltry_kenzatlas;charset=utf8', 'kenzltry_mariamFayz', 'kenzatlas2024');
		} catch(Exception $e) {
			die('Erreur : '.$e->getMessage());
		}
			$statement = $database->query(
				"SELECT * FROM produitscommandés  WHERE numeroCommande = $numero"
			);
			$produitscommandés = [];
			while (($row = $statement->fetch())) {
				$statement = $database->query(
					"SELECT * FROM produit  WHERE idProduit = $row[idProduit]"
				);
				$produit = $statement->fetch();
				$produitcommandé = [
					'numero'=> $row['numeroCommande'],
					'produit' => $produit['nomProduit'],
					'prix'=>$produit['prixProduit'],
					'quantite'=>$row['quantiteCommandés'],
					'prixTotal'=> ((float)$produit['prixProduit'] * (int)$row['quantiteCommandés'])  
				];
				$produitscommandés[] = $produitcommandé;
			}
		return $produitscommandés;	
			
	}

	

	function getTotalPrice($produits){
		foreach($produits as $produit){
			$prixTotal = 0;
			$prix = $produit['prix'] * $produit['quantite'];
			$prixTotal += $prix;
		}
		return $prixTotal;
	}



	
