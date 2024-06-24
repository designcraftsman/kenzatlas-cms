<?php 

    function getArticles(){
    try {
    	$database = new PDO('mysql:host=localhost;dbname=kenzltry_kenzatlas;charset=utf8', 'kenzltry_mariamFayz', 'kenzatlas2024');
	} catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
	}
    $statement = $database->query(
    	"SELECT * FROM articles  ORDER BY idArticle DESC"
	);
	$articles = [];
	while (($row = $statement->fetch())) {
    	$article = [
            'id'=> $row['idArticle'],
        	'titre' => $row['titreArticle'],
        	'image' => $row['imageArticle'],
			'date'=> $row['dateArticle'],
        	'vue' => $row['vueArticle'],
    	];

    	$articles[] = $article;
	}
    return $articles;
    }
