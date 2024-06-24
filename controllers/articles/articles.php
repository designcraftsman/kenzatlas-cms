<?php 

require ('../../models/articlesController.php') ;

$articles = getArticles();

 require ('../../views/articles/articles.php');
