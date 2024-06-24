<?php 

require_once('orders.php');
require_once('delete.php');
require_once('view.php');

try{
    if(isset($_GET['action']) && $_GET['action'] !== ""){
        if($_GET['action']=='view'){
            if(isset($_GET['numero-commande'])){
                $numero = $_GET['numero-commande'];
                view($numero);
            }else{
                throw new Exception('Cette commandne n\'existe pas');
            }
        }else if($_GET['action']=='delete'){ 
            if(isset($_GET['numero-commande'])){
                $numero = $_GET['numero-commande'];
                delete($numero);
            }else{
                throw new Exception('Cette commandne n\'existe pas');
            }
        }else{
            throw new Exception('Cette page n\'existe pas');
        }
    }else{
        orders();
    }
}catch(Exception $e){
        echo $e->getMessage();
}
