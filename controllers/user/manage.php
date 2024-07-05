<?php 


require ('../../models/userController.php') ;

function manage(){
    $adminRepository = new AdminRepository();
    $adminRepository->connection = new DatabaseConnection();
    $admin = $adminRepository->getAdmin();
    require ('../../views/user/manage.php');
}

