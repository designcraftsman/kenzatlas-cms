<?php 

	require_once '../../lib/database.php';
	class Message{
		public int $id;
		public string $utulisateur;
		public string $email;
		public string $message;
		public string $date;
	}

	class MessageRepository{
		public DatabaseConnection $connection;
		public function getMessages():array{
			$statement = $this->connection->getConnection()->query(
				"SELECT * FROM messages  ORDER BY idMessage DESC"
			);
			$messages = [];
			while (($row = $statement->fetch())) {
				$message  = new Message();
				$message->id =  $row['idMessage'];
				$message->utulisateur = $row['nomCompletUtulisateur'];
				$message->email = $row['emailUtulisateur'];
				$message->message = $row['messageUtulisateur'];
				$message->date =$row['dateMessage'];
				$messages[] = $message;
			}
			return $messages;
			}

			public function getMessage($id):Message{
				$statement = $this->connection->getConnection()->query(
					"SELECT * FROM messages  WHERE idMessage = $id"
				);
				$row = $statement->fetch();
				$message  = new Message();
				$message->id =  $row['idMessage'];
				$message->utulisateur = $row['nomCompletUtulisateur'];
				$message->email = $row['emailUtulisateur'];
				$message->message = $row['messageUtulisateur'];
				$message->date =$row['dateMessage'];
				return $message;
			}

			public function deleteMessage($id){
				$statement = $this->connection->getConnection()->prepare(
					"DELETE FROM messages WHERE idMessage = :id"
				);
				$statement->execute([
					':id' => $id
				]);
				$_SESSION['error_message'] = 'Message supprimé avec succès';
				header('Location: ../messages/index.php');
			}	
	}
    
