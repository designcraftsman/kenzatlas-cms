<?php 

require ('../../models/messagesController.php') ;

$messages = getMessages();

 require ('../../views/messages/messages.php');

