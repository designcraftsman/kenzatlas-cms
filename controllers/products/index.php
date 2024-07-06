<?php 
session_start();
if($_SESSION['login'] == false){
    header('Location: ../../index.php');
}else{
require_once('products.php');
require_once('add.php');
require_once('modify.php');
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
        }else if($_GET['action']=='add'){ 
                add();
        }else if($_GET['action']=='modify'){ 
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                modify($id);
            }else{
                throw new Exception('Cette commandne n\'existe pas');
            }
        }else{
            throw new Exception('Cette page n\'existe pas');
        }
    }else{
        products();
    }
}catch(Exception $e){
        echo $e->getMessage();
}
}