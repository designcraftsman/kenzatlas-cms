<?php 

    function getUsers(){
    try {
    	$database = new PDO('mysql:host=localhost;dbname=kenzltry_kenzatlas;charset=utf8', 'kenzltry_mariamFayz', 'kenzatlas2024');
	} catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
	}
    $statement = $database->query(
    	"SELECT * FROM utulisateur ORDER BY idUtulisateur DESC"
	);
	$utulisateur = [];
	while (($row = $statement->fetch())) {
    	$utulisateur = [
            'id'=> $row['idUtulisateur'],
        	'nom' => $row['nomUtulisateur'],
        	'prenom' => $row['prenomUtulisateur'],
            'email'=>$row['emailUtulisateur'],
			'dateNaissance'=>$row['dateNaissanceUtulisateur'],
			'telephone'=>$row['telephoneUtulisateur']
    	];

    	$utulisateurs[] = $utulisateur;
	}
    return $utulisateurs;
    }
