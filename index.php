<?php 
session_start();
require_once('lib/database.php');
require_once('models/userController.php');

try {
    $adminRepository = new AdminRepository();
    $adminRepository->connection = new DatabaseConnection();
    
    // Initialize or retrieve login attempts and last attempt time
    if (!isset($_SESSION['attempts'])) {
        $_SESSION['attempts'] = 5;
    }
    if (!isset($_SESSION['last_attempt_time'])) {
        $_SESSION['last_attempt_time'] = time();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $current_time = time();
        $time_diff = $current_time - $_SESSION['last_attempt_time'];

        // Check if user is blocked
        if ($_SESSION['attempts'] <= 0 && $time_diff < 1800) { // 1800 seconds = 30 minutes
            $loginError = 'Maximum des tentatives atteintes. Veuillez réssayer dans 30 minutes.';
        } else {
            if ($time_diff >= 1800) {
                // Reset attempts and last attempt time after 30 minutes
                $_SESSION['attempts'] = 5;
                $_SESSION['last_attempt_time'] = $current_time;
            }

            $login = $adminRepository->login();

            if ($login) {
                header('Location: controllers/dashboard.php');
                exit();
            } else {
                $_SESSION['attempts'] -= 1;
                $_SESSION['last_attempt_time'] = $current_time;
                if ($_SESSION['attempts'] <= 0) {
                    $loginError = 'Maximum des tentatives atteintes. Veuillez réssayer dans 30 minutes.';
                }
            }
        }
    }
} catch (Exception $e) {
    $loginError = $e->getMessage();
}

require('views/login.php');
