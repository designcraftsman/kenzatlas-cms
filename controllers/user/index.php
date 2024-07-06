<?php 
session_start();
if($_SESSION['login'] == false){
    header('Location: ../../index.php');
}else{
require_once('../../lib/database.php');
require_once('manage.php');
require_once('password.php');
require_once('personnelinfo.php');

try{
    if(isset($_GET['action']) && $_GET['action'] !== ""){
        if($_GET['action']=='password'){
            password();
        }else if($_GET['action']=='personnelinfo'){ 
            personnelinfo();
        }else{
            throw new Exception('Cette page n\'existe pas');
        }
    }else{
        manage();
    }
}catch(Exception $e){
        echo $e->getMessage();
}
}