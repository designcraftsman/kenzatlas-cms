<?php 

session_start();
if($_SESSION['login'] == false){
    header('Location: ../../index.php');
}else{
require_once('messages.php');
require_once('delete.php');
require_once('view.php');

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
        }else{
            throw new Exception('Cette page n\'existe pas');
        }
    }else{
        messages();
    }
}catch(Exception $e){
        echo $e->getMessage();
}

}