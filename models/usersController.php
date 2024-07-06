<?php 



	class User{
		public int $number;
		public string $nom;
		public string $prenom;
		public string $email;
		public string $dateNaissance;
		public string $telephone;
	}

	class UserRepository{
		public DatabaseConnection $connection;

		public function getUsers():array{
			$statement = $this->connection->getConnection()->query(
				"SELECT * FROM utulisateur ORDER BY idUtulisateur DESC"
			);
			$utulisateur = [];
			while (($row = $statement->fetch())) {
				$utulisateur = new User();				
				$utulisateur->id = $row['idUtulisateur'];
				$utulisateur->nom = $row['nomUtulisateur'];
				$utulisateur->prenom = $row['prenomUtulisateur'];
				$utulisateur->email = $row['emailUtulisateur'];
				$utulisateur->dateNaissance = $row['dateNaissanceUtulisateur'];
				$utulisateur->telephone = $row['telephoneUtulisateur'];
				$utulisateurs[] = $utulisateur;
			}
			return $utulisateurs;
		}

		public function getUser($id):User{
			$statement = $this->connection->getConnection()->query(
				"SELECT * FROM utulisateur WHERE idUtulisateur = '$id'"
			);
			$utulisateur = [];
			$row = $statement->fetch();
				$utulisateur = new User();				
				$utulisateur->id = $row['idUtulisateur'];
				$utulisateur->nom = $row['nomUtulisateur'];
				$utulisateur->prenom = $row['prenomUtulisateur'];
				$utulisateur->email = $row['emailUtulisateur'];
				$utulisateur->dateNaissance = $row['dateNaissanceUtulisateur'];
				$utulisateur->telephone = $row['telephoneUtulisateur'];
			return $utulisateur;
		}

		public function getRecentUsers():int{
			$statement = $this->connection->getConnection()->query(
				"SELECT COUNT(*) FROM utulisateur where dateCreation > DATE_SUB(CURDATE(), INTERVAL 30 DAY)"
			);
			$row = $statement->fetch();
			return $row[0];
		}

		public function deleteUser($id){
			$sqlQuery = "DELETE FROM utulisateur WHERE idUtulisateur = :idUtulisateur";
			$deleteUser = $this->connection->getConnection()->prepare($sqlQuery);
			$deleteUser->execute([
				'idUtulisateur' => $id
			]);
			$_SESSION['error_message'] = "L'utilisateur a été supprimé avec succès";
			header('Location: index.php');
		}
	}
    
