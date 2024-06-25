<?php 

require_once ('../../models/articlesController.php') ;
function articles(){
    $ArticleRepository = new ArticleRepository();
    $ArticleRepository->connection = new DatabaseConnection();
    $articles = $ArticleRepository->getArticles();
    require ('../../views/articles/articles.php');
}