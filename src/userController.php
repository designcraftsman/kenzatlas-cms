<?php 

    function getAdmin(){
    try {
    	$database = new PDO('mysql:host=localhost;dbname=kenzltry_kenzatlas;charset=utf8', 'kenzltry_mariamFayz', 'kenzatlas2024');
	} catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
	}
    $statement = $database->query(
    	"SELECT * FROM admin"
	);
	$row = $statement->fetch();
    $admin = [
        'email'=> $row['emailAdmin'],
        'motdepasse' => $row['motdepasseAdmin'],
    ];
    return $admin;
}
