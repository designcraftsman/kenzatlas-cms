<?php
    session_start();
    if($_SESSION['login'] == false){
        header('Location: ../index.php');
    }else{
        require_once('../lib/database.php');
        require_once('../models/usersController.php');
        require_once('../models/orderController.php');
        $utulisateurRepository = new UserRepository();
        $utulisateurRepository->connection = new DatabaseConnection();
        $utulisateurs = $utulisateurRepository->getUsers();
        $utulisateurRepository->connection = new DatabaseConnection();
        $recentUsers = $utulisateurRepository->getRecentUsers();
        $orderRepository = new OrderRepository();
        $orderRepository->connection = new DatabaseConnection();
        $confirmedOrders = $orderRepository->getConfirmedOrders();
        $orderRepository->connection = new DatabaseConnection();
        $unconfirmedOrders = $orderRepository->getUnconfirmedOrders();
        require_once('../views/dashboard.php');
    }