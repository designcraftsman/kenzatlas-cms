<?php 


require ('../../src/usersController.php') ;

$utulisateurs = getUsers();

 require ('../../templates/users/users.php');
