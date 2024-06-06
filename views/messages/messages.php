<?php 

require ('../../src/messagesController.php') ;

$messages = getMessages();

 require ('../../templates/messages/messages.php');

