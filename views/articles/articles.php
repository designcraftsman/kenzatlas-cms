<?php 

require ('../../src/articlesController.php') ;

$articles = getArticles();

 require ('../../templates/articles/articles.php');

?>