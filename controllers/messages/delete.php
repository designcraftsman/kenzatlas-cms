<?php 

require_once '../../models/messagesController.php';
function delete($id){
    $messagesRepository = new MessageRepository();
    $messagesRepository->connection = new DatabaseConnection();
    $messagesRepository->deleteMessage($id);
}

