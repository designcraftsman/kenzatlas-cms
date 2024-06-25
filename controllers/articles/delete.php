<?php 


require_once ('../../models/articlesController.php') ;
function delete($id){
    $ArticleRepository = new ArticleRepository();
    $ArticleRepository->connection = new DatabaseConnection();
    $ArticleRepository->deleteArticle($id);
}
