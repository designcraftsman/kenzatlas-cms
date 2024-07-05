<?php 

require_once('../../models/messagesController.php') ;
function view($id){
    $messagesRepository = new MessageRepository();
    $messagesRepository->connection = new DatabaseConnection();
    $message = $messagesRepository->getMessage($id);
    require ('../../views/messages/view.php');
}
