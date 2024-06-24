<?php 

    function getMessages(){
    try {
    	$database = new PDO('mysql:host=localhost;dbname=kenzltry_kenzatlas;charset=utf8', 'kenzltry_mariamFayz', 'kenzatlas2024');
	} catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
	}
    $statement = $database->query(
    	"SELECT * FROM messages  ORDER BY idMessage DESC"
	);
	$messages = [];
	while (($row = $statement->fetch())) {
    	$message = [
            'id'=> $row['idMessage'],
        	'utulisateur' => $row['nomCompletUtulisateur'],
        	'email' => $row['emailUtulisateur'],
        	'message' => $row['messageUtulisateur'],
            'date'=>$row['dateMessage'],
    	];

    	$messages[] = $message;
	}
    return $messages;
    }
