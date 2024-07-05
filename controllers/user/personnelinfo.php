<?php 

require_once('../../models/userController.php');
function personnelinfo(){
    $adminRepository = new AdminRepository();
    $adminRepository->connection = new DatabaseConnection();
    $admin = $adminRepository->getAdmin();
    $adminRepository->changeInfo();
    require ('../../views/user/personnelinfo.php');
}

