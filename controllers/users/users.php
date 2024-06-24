<?php 

require ('../../models/usersController.php') ;

$utulisateurs = getUsers();

 require ('../../views/users/users.php');
