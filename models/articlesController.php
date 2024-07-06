<?php 
	require_once'../../lib/database.php';
	class Article{
		public int $id;
		public string $titre;
		public string $image;
		public string $date;
		public string $categorie;
		public string $vue;
		public string $contenu;

	}
	class ArticleRepository{
		public DatabaseConnection $connection;

		public function getArticles():array{
			
			$statement = $this->connection->getConnection()->query(
				"SELECT * FROM articles  ORDER BY idArticle DESC"
			);
			$articles = [];
			while (($row = $statement->fetch())) {
				$article =  new Article();
				$article->id = $row['idArticle'];
				$article->titre = $row['titreArticle'];
				$article->image = $row['imgArticle'];
				$article->date = $row['dateArticle'];
				$article->vue = $row['vueArticle'];
				$articles[] = $article;
			}
			return $articles;
			}
			public function getArticle($id): ?Article {
				// Prepare the SQL statement to prevent SQL injection
				$statement = $this->connection->getConnection()->prepare(
					"SELECT * FROM articles WHERE idArticle = :id"
				);
				$statement->bindParam(':id', $id, PDO::PARAM_INT);
				$statement->execute();
			
				// Fetch the article
				$row = $statement->fetch();
			
					$article = new Article();
					$article->id = $row['idArticle'];
					$article->titre = $row['titreArticle'];
					$article->image = $row['imgArticle'];
					$article->categorie = $row['categorieArticle'];
					$article->date = $row['dateArticle'];
					$article->vue = $row['vueArticle'];
					$article->contenu = $row['contenuArticle'];
					return $article;
				
			}
			
			public function addArticle(){
				if (isset($_POST['titreArticle']) && isset($_POST['contenuArticle']) && isset($_POST['categorieArticle']) && isset($_FILES['imgArticle']) && $_FILES['imgArticle']['error'] == 0) {
				$titreArticle = $_POST['titreArticle'];	
				$contenuArticle = $_POST['contenuArticle'];
				$categorieArticle = $_POST['categorieArticle'];
				$fileInfo = pathinfo($_FILES['imgArticle']['name']);
				$extension = $fileInfo['extension'];
				$allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
				if (in_array($extension, $allowedExtensions)){
					move_uploaded_file($_FILES['imgArticle']['tmp_name'], '../../../assets/img/articles/' . basename($_FILES['imgArticle']['name']));
					$imgArticle = '../assets/img/articles/' . basename($_FILES['imgArticle']['name']);
					$sqlQuery = 'INSERT INTO articles(imgArticle,titreArticle,categorieArticle,contenuArticle) VALUES (:imgArticle,:titreArticle,:categorieArticle,:contenuArticle)';
					$insertPost = $this->connection->getConnection()->prepare($sqlQuery);
					$insertPost->execute([
						'imgArticle'=> $imgArticle,
						'titreArticle'=> $titreArticle,
						'categorieArticle'=>$categorieArticle,
						'contenuArticle'=>$contenuArticle,
					]);
					}else{
						$_SESSION['error_message']='l\'extension de l\'image n\'est pas autorisée';
					}
					$_SESSION['success_message']='Article ajouté avec succès';
					header('Location: index.php');	
					}
			}

			public function deleteArticle($idArticle){
				$sqlQuery = "DELETE FROM articles WHERE idArticle = :idArticle";
				$deleteArticle = $this->connection->getConnection()->prepare($sqlQuery);
				$deleteArticle->execute([
					':idArticle'=>$idArticle,
				]);
				$_SESSION['error_message']='Article supprimé avec succès';
				header('Location: index.php');
			}

			public function modifyArticle($idArticle){
				if (isset($_POST['titreArticle']) && isset($_POST['categorieArticle']) && isset($_POST['contenuArticle'])){
                    // Assigning values to variables
                    $titreArticle = $_POST['titreArticle'];
                    $categorieArticle = $_POST['categorieArticle'];
                    $contenuArticle = $_POST['contenuArticle'];

                    if(isset($_FILES['imgArticle']) && $_FILES['imgArticle']['error'] == 0 ){
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
							move_uploaded_file($_FILES['imgArticle']['tmp_name'], '../../../assets/img/articles/' . basename($_FILES['imgArticle']['name']));
							$imgArticle = '../assets/img/articles/' . basename($_FILES['imgArticle']['name']);

							// Check if there were any image upload errors
							if (!empty($imageUploadErrors)) {
								foreach ($imageUploadErrors as $error) {
									echo $error . '<br>';
								}
							} else {
								// Insert data into the database
								$sqlQuery = "UPDATE articles
									SET imgArticle = :imgArticle,  
										titreArticle = :titreArticle, 
										categorieArticle = :categorieArticle, 
										contenuArticle = :contenuArticle 
									WHERE idArticle = :idArticle";
								$insertArticle = $this->connection->getConnection()->prepare($sqlQuery);
								$insertArticle->execute([
									'imgArticle'=>  $imgArticle,
									'titreArticle' => $titreArticle,
									'categorieArticle' => $categorieArticle,
									'contenuArticle'=> $contenuArticle,
									'idArticle'=>$idArticle,
								]);
							}
                        }else{
							$sqlQuery = "UPDATE articles 
								SET 
									titreArticle = :titreArticle, 
									categorieArticle = :categorieArticle, 
									contenuArticle = :contenuArticle
								WHERE idArticle = :idArticle ";
							$insertArticle = $this->connection->getConnection()->prepare($sqlQuery);
							$insertArticle->execute([
								'titreArticle' => $titreArticle,
								'categorieArticle' => $categorieArticle,
								'contenuArticle'=> $contenuArticle,
								'idArticle'=>$idArticle,
							]);
                    	}
						header('Location: index.php');
                }
			}
	}
	
