<?php 

require_once('../../models/messagesController.php') ;
function messages(){
    $messagesRepository = new MessageRepository();
    $messagesRepository->connection = new DatabaseConnection();
    $messages = $messagesRepository->getMessages();
    require ('../../views/messages/messages.php');
}
