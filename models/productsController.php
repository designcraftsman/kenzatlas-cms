<?php 


	require('../../lib/database.php');

	class Product{
		public int $id;
		public string $nom;
		public string $image;
		public string $image2;
		public string $image3;
		public string $prix;
		public string $sousTitre;
		public string $ingredients;
		public string $description;
		public int $moyenne;
		public string $categorie;
		public string $etat;

		
	}

	class ProductRepository {
		public DatabaseConnection $connection;

		public function getProducts(): array {
			$statement = $this->connection->getConnection()->query("SELECT * FROM produit ORDER BY idProduit DESC");
			$produits = [];
			while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
				$produit = new Product();
				$produit->id = $row['idProduit'];
				$produit->nom = $row['nomProduit'];
				$produit->image = $row['imageProduit1'];
				$produit->prix = $row['prixProduit'];
				$produit->description = $row['descriptionProduit'];
				$produit->moyenne = $row['moyenneNotation'];
				$produit->categorie = $row['categorieProduit'];
				$produit->etat = $row['etatProduit'];
				$produits[] = $produit;
			}
			return $produits;
		}

		public function getProduct(int $id): Product {
			$statement = $this->connection->getConnection()->prepare("SELECT * FROM produit WHERE idProduit = :id");
			$statement->bindParam(':id', $id, PDO::PARAM_INT);
			$statement->execute();
			$row = $statement->fetch(PDO::FETCH_ASSOC);
				$produit = new Product();
				$produit->id = $row['idProduit'];
				$produit->nom = $row['nomProduit'];
				$produit->image = $row['imageProduit1'];
				$produit->prix = $row['prixProduit'];
				$produit->description = $row['descriptionProduit'];
				$produit->ingredients = $row['ingredientsProduit'];
				$produit->sousTitre = $row['sousTitreProduit'];
				$produit->moyenne = $row['moyenneNotation'];
				$produit->categorie = $row['categorieProduit'];
				$produit->etat = $row['etatProduit'];
				return $produit;
			
		}

		public function addProduct(){
			if (isset($_POST['nomProduit']) && isset($_POST['sousTitreProduit']) && isset($_POST['descriptionProduit']) && isset($_POST['ingredientsProduit']) && isset($_POST['prixProduit']) && isset($_POST['categorieProduit']) && isset($_FILES['imageProduit']) && $_FILES['imageProduit']['error'] == 0 ) {
				// Assigning values to variables
				$nomProduit = $_POST['nomProduit'];
				$prixProduit = $_POST['prixProduit'];
				$sousTitreProduit = $_POST['sousTitreProduit'];
				$descriptionProduit = $_POST['descriptionProduit']; // Added missing field
				$ingredientsProduit = $_POST['ingredientsProduit']; // Added missing field
				$categorieProduit = $_POST['categorieProduit'];
				if(!isset($_POST['etatProduit'])){
					$etatProduit = "unique";
				}else{
					$etatProduit = $_POST ['etatProduit'];
				}
				// Validate and upload images
				$imageUploadErrors = [];

				function uploadImage($file, $targetPath)
							{
								global $imageUploadErrors;

								$fileInfo = pathinfo($file['name']);
								$extension = $fileInfo['extension'];
								$allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];

								if (in_array($extension, $allowedExtensions)) {
									move_uploaded_file($file['tmp_name'], $targetPath . basename($file['name']));
									return $targetPath . basename($file['name']);
								} else {
									$imageUploadErrors[] = 'Erreur : L\'extension de l\'image n\'est pas autorisée';
									return null;
								}
							}
							move_uploaded_file($_FILES['imageProduit']['tmp_name'], '../../../assets/img/produits/' . basename($_FILES['imageProduit']['name']));
							move_uploaded_file($_FILES['imageProduit2']['tmp_name'], '../../../assets/img/produits/' . basename($_FILES['imageProduit2']['name']));
							$imageProduit1 = '../assets/img/produits/' . basename($_FILES['imageProduit']['name']);
							$imageProduit2 = '../assets/img/produits/' . basename($_FILES['imageProduit2']['name']);

				// Check if there were any image upload errors
				if (!empty($imageUploadErrors)) {
					foreach ($imageUploadErrors as $error) {
						echo $error . '<br>';
					}
				} else {
					// Insert data into the database
					$sqlQuery = 'INSERT INTO produit(imageProduit1, imageProduit2, nomProduit, sousTitreProduit, prixProduit , descriptionProduit, ingredientsProduit, categorieProduit , etatProduit) VALUES (:imageProduit1, :imageProduit2 , :nomProduit, :sousTitreProduit, :prixProduit ,:descriptionProduit, :ingredientsProduit, :categorieProduit , :etatProduit)';
					$insertProduit = $this->connection->getConnection()->prepare($sqlQuery);
					$insertProduit->execute([
						'imageProduit1' => $imageProduit1,
						'imageProduit2' => $imageProduit2,
						'nomProduit' => $nomProduit,
						'prixProduit'=> $prixProduit,
						'sousTitreProduit' => $sousTitreProduit,
						'descriptionProduit' => $descriptionProduit,
						'ingredientsProduit' => $ingredientsProduit,
						'categorieProduit' => $categorieProduit,
						'etatProduit' => $etatProduit,
					]);
				}
			}
		}

		public function modifyProduct($idProduit){
			if (
				isset($_POST['nomProduit']) &&
				isset($_POST['sousTitreProduit']) &&
				isset($_POST['descriptionProduit']) &&
				isset($_POST['ingredientsProduit']) &&
				isset($_POST['prixProduit']) &&
				isset($_POST['categorieProduit']) 
			) {
				// Assigning values to variables
				$nomProduit = $_POST['nomProduit'];
				$prixProduit = $_POST['prixProduit'];
				$sousTitreProduit = $_POST['sousTitreProduit'];
				$descriptionProduit = $_POST['descriptionProduit']; // Added missing field
				$ingredientsProduit = $_POST['ingredientsProduit']; // Added missing field
				$categorieProduit = $_POST['categorieProduit'];
				if(!isset($_POST['etatProduit'])){
					$etatProduit = "unique";
				}else{
					$etatProduit = $_POST['etatProduit'];
				}


				if(isset($_FILES['imageProduit']) && $_FILES['imageProduit']['error'] == 0 ){
				// Validate and upload images
				$imageUploadErrors = [];

				function uploadImage($file, $targetPath)
							{
								global $imageUploadErrors;

								$fileInfo = pathinfo($file['name']);
								$extension = $fileInfo['extension'];
								$allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];

								if (in_array($extension, $allowedExtensions)) {
									move_uploaded_file($file['tmp_name'], $targetPath . basename($file['name']));
									return $targetPath . basename($file['name']);
								} else {
									$imageUploadErrors[] = 'Erreur : L\'extension de l\'image n\'est pas autorisée';
									return null;
								}
							}
							move_uploaded_file($_FILES['imageProduit']['tmp_name'], '../../../assets/img/produits/' . basename($_FILES['imageProduit']['name']));
							move_uploaded_file($_FILES['imageProduit2']['tmp_name'], '../../../assets/img/produits/' . basename($_FILES['imageProduit2']['name']));
							$imageProduit1 = '../assets/img/produits/' . basename($_FILES['imageProduit']['name']);
							$imageProduit2 = '../assets/img/produits/' . basename($_FILES['imageProduit2']['name']);

				// Check if there were any image upload errors
				if (!empty($imageUploadErrors)) {
					foreach ($imageUploadErrors as $error) {
						echo $error . '<br>';
					}
				} else {
					// Insert data into the database
					$sqlQuery = "UPDATE produit 
						SET imageProduit1 = :imageProduit1,  
							nomProduit = :nomProduit, 
							sousTitreProduit = :sousTitreProduit, 
							prixProduit = :prixProduit, 
							descriptionProduit = :descriptionProduit, 
							ingredientsProduit = :ingredientsProduit, 
							categorieProduit = :categorieProduit, 
							etatProduit = :etatProduit 
						WHERE idProduit = :idProduit";
					$insertProduit = $this->connection->getConnection()->prepare($sqlQuery);
					$insertProduit->execute([
						'idProduit'=>  $idProduit,
						'imageProduit1' => $imageProduit1,
						'nomProduit' => $nomProduit,
						'prixProduit'=> $prixProduit,
						'sousTitreProduit' => $sousTitreProduit,
						'descriptionProduit' => $descriptionProduit,
						'ingredientsProduit' => $ingredientsProduit,
						'categorieProduit' => $categorieProduit,
						'etatProduit' => $etatProduit,
					]);
				}}else{
					$sqlQuery = "UPDATE produit 
						SET 
							nomProduit = :nomProduit, 
							sousTitreProduit = :sousTitreProduit, 
							prixProduit = :prixProduit, 
							descriptionProduit = :descriptionProduit, 
							ingredientsProduit = :ingredientsProduit, 
							categorieProduit = :categorieProduit, 
							etatProduit = :etatProduit 
						WHERE idProduit = :idProduit";
					$insertProduit = $this->connection->getConnection()->prepare($sqlQuery);
					$insertProduit->execute([
						'idProduit'=> $idProduit,
						'nomProduit' => $nomProduit,
						'prixProduit'=> $prixProduit,
						'sousTitreProduit' => $sousTitreProduit,
						'descriptionProduit' => $descriptionProduit,
						'ingredientsProduit' => $ingredientsProduit,
						'categorieProduit' => $categorieProduit,
						'etatProduit' => $etatProduit,
					]);
				}
				header('Location: index.php');
			}
		}


		public function deleteProduct($idProduit){
			$sqlQuery = "DELETE FROM produit WHERE idProduit = :idProduit";
			$deleteProduit = $this->connection->getConnection()->prepare($sqlQuery);
			$deleteProduit->execute([
				'idProduit' => $idProduit
			]);
			header('Location: index.php');
		}
	}
 
