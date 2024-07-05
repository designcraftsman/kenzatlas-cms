<?php 
	class Order{
		public int $numero;
		public string $nomClient;
		public string $prenomClient;
		public string $telephone;
		public string $dateCommande;
		public float $prix;
		public string $date;
		public int $codePostal;
		public int $idClient;
		public string $ville;
		public string $adresse;
		public string $statut;
		public string $note;

	}
	class OrderRepository{
		public DatabaseConnection $connection;

		public function getOrders():array{
			$statement = $this->connection->getConnection()->query(
				"SELECT * FROM commandes  ORDER BY numeroCommande DESC"
			);
			$commandes = [];
			while (($row = $statement->fetch())) {
				$commande = new Order();
				$commande->numero = $row['numeroCommande'];
				$commande->nomClient = $row['nomClient'];
				$commande->prenomClient = $row['prenomClient'];
				$commande->telephone =  $row['telephoneClient'];
				$commande->prix = $row['totalCommande'];
				$commande->date = $row['dateCommande'];
				$commandes[] = $commande;
			}
			return $commandes;
		}

		public function getOrder($numero):Order{
				$statement = $this->connection->getConnection()->query(
					"SELECT * FROM commandes  WHERE numeroCommande = $numero"
				);
	
				$row = $statement->fetch();
				$commande = new Order();
				$commande->numero = $row['numeroCommande'];
				$commande->idClient  = $row['idUtulisateur'];
				$commande->date = $row['dateCommande'];
				$commande->nomClient = $row['nomClient'];
				$commande->prenomClient = $row['prenomClient'];
				$commande->adresse = $row['adresseClient'];
				$commande->telephone = $row['telephoneClient'];
				$commande->codePostal = $row['codePostalClient'];
				$commande->ville = $row['villeClient'];
				$commande->note =  $row['noteCommandeClient'];
				$commande->statut =  $row['statutCommande'];
				$commande->prix =  $row['totalCommande'];
				return $commande;
		}

		

		public function getOrderDetails($numero){
				$statement = $this->connection->getConnection()->query(
					"SELECT * FROM produitscommandés  WHERE numeroCommande = $numero"
				);
				$produitscommandés = [];
				while (($row = $statement->fetch())) {
					$statement = $this->connection->getConnection()->query(
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

		public function getConfirmedOrders():int{
			$statement = $this->connection->getConnection()->query(
				"SELECT COUNT(*) FROM commandes WHERE statutCommande = 'confirmé'"
			);
			$row = $statement->fetch();
			return $row[0];
		}

		public function getunconfirmedOrders():int{
			$statement = $this->connection->getConnection()->query(
				"SELECT COUNT(*) FROM commandes WHERE statutCommande = 'non confirmé'"
			);
			$row = $statement->fetch();
			return $row[0];
		}
		
		public function getOrdersNumber(int $id): int {
			// Prepare the statement to prevent SQL injection
			$statement = $this->connection->getConnection()->prepare(
				"SELECT COUNT(*) FROM commandes WHERE idUtulisateur = :id"
			);
			
			// Bind the parameter
			$statement->bindParam(':id', $id, PDO::PARAM_INT);
			
			// Execute the statement
			$statement->execute();
			
			// Fetch the result
			$row = $statement->fetch(PDO::FETCH_NUM);
			
			// Return the count of rows
			return (int)$row[0];
		}

		public function getUserOrders(int $id): array {
			// Prepare the statement to prevent SQL injection
			$statement = $this->connection->getConnection()->prepare(
				"SELECT * FROM commandes WHERE idUtulisateur = :id ORDER BY numeroCommande DESC"
			);

			// Bind the parameter
			$statement->bindParam(':id', $id, PDO::PARAM_INT);

			// Execute the statement
			$statement->execute();

			// Fetch the result
			$orders = [];
			while ($row = $statement->fetch()) {
				$order = new Order();
				$order->numero = $row['numeroCommande'];
				$order->prix = $row['totalCommande'];
				$order->date = $row['dateCommande'];
				$order->statut = $row['statutCommande'];
				$orders[] = $order;
			}
			return $orders;
		}
		
		public function deleteOrder($numero){
					$statement = $this->connection->getConnection()->prepare(
						"DELETE FROM commandes WHERE numeroCommande = :numero"
					);
					$statement->execute([
						':numero' => $numero
					]);
					$statement = $this->connection->getConnection()->prepare(
						"DELETE FROM produitscommandés WHERE numeroCommande = :numero"
					);
					$statement->execute([
						':numero' => $numero
					]);
					
		}

		public function confirmOrder($numero){
					$statement = $this->connection->getConnection()->prepare(
						"UPDATE commandes SET statutCommande = 'confirmé' WHERE numeroCommande = :numero"
					);
					$statement->execute([
						':numero' => $numero
					]);
		}
	}


    



	
	

	

	

	




	
