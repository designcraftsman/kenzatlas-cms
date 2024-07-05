<?php 

require_once('../../models/articlesController.php');

function view($id){
    $ArticleRepository = new ArticleRepository();
    $ArticleRepository->connection = new DatabaseConnection();
    $article = $ArticleRepository->getArticle($id);
    require ('../../views/articles/view.php');
}
