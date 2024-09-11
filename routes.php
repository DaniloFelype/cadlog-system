<?php
    // Inclui arquivos de controlador necessários para lidar com diferentes ações

require 'controllers/AuthController.php'; // Instancia controlador de autenticação

require 'controllers/UserController.php'; // Instancia controlador de usuário

require 'controllers/DashboardController.php'; // Instancia controlador de deashboard

// Cria instância dos controladores para utilizar seus métodos
$authController = new AuthController();
$userController = new UserController();
$dashboardController = new DashboardController();

?>