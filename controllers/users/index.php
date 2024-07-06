<?php 
session_start();
if($_SESSION['login'] == false){
    header('Location: ../../index.php');
}else{
require_once('../../lib/database.php');
require_once('../../models/orderController.php');
require_once('users.php');
require_once('delete.php');
require_once('view.php');
require_once('userOrders.php');

try{
    if(isset($_GET['action']) && $_GET['action'] !== ""){
        if($_GET['action']=='view'){
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                view($id);
            }else{
                throw new Exception('Cette commandne n\'existe pas');
            }
        }else if($_GET['action']=='delete'){ 
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                delete($id);
            }else{
                throw new Exception('Cette commandne n\'existe pas');
            }
            
        }else if($_GET['action']=='userOrders'){ 
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                userOrders($id);
            }else{
                throw new Exception('Cette commandne n\'existe pas');
            }
        }else{
            throw new Exception('Cette page n\'existe pas');
        }
    }else{
        users();
    }
}catch(Exception $e){
        echo $e->getMessage();
}
}
