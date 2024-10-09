<?php
    // Inclui arquivos de controlador necessários para lidar com diferentes ações

require 'controllers/AuthController.php'; // Instancia controlador de autenticação

require 'controllers/UserController.php'; // Instancia controlador de usuário

require 'controllers/DashboardController.php'; // Instancia controlador de deashboard

// Cria instância dos controladores para utilizar seus métodos
$authController = new AuthController();
$UserController = new UserController();
$dashboardController = new DashboardController();

 // $dashboardController = new DashboardController();
 
    // coleta a ação da URL, se não ouver ação definida, usa 'login'como padrão
    $action = $_GET['action'] ?? 'login'; //usa operadpor de coalecencia nula (??) para definir 'login' se 'action' não estiver presente
 
    switch ($action){
        case 'login':
            $authController->login();
            break;
        case 'register':
            $userController->register();
            break;
        case 'dashboard':
            $dashboardController->index();
            break;
        default:
        $authController->login();
        break;
    }
?>