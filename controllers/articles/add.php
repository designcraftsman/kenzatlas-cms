<?php 

require_once('../../models/articlesController.php');
function add(){
    $ArticleRepository = new ArticleRepository();
    $ArticleRepository->connection = new DatabaseConnection();
    $ArticleRepository->addArticle();
    require ('../../views/articles/add.php');
}
