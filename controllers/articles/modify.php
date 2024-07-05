<?php 


require_once('../../models/articlesController.php');
function modify($id){
    $ArticleRepository = new ArticleRepository();
    $ArticleRepository->connection = new DatabaseConnection();
    $article = $ArticleRepository->getArticle($id);
    $ArticleRepository->modifyArticle($id);
    require ('../../views/articles/modify.php');
    
}
