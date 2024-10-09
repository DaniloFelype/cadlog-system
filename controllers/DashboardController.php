<?php

class DashboardController
{
    // Função index, responsavel por exibir a página dashboard
    public function index(){
    // Inicia a sessão para verificar se o usuário está autenticado
    session_start();
        // Redirecion o usúario para a página inicial
    if(!isset($_SESSION['usuario_id'])){

    }
    
    }
}
?>
<?php
 
 class DashboardController
 {
     // Função index, responsavel por exibir a página dashboard
     public function index(){
     // Inicia a sessão para verificar se o usuário está autenticado
     session_start();
     if(!isset($_SESSION['usuario_id'])){
        // Redireciona o usuário para a página inicial
         header('location: index.php');
         exit; //Garante que o script seja interrompido
     }
    //  Se o usuário estiver autenticado, inclui a View 'dashboard', que exibe o painel de controle
     include 'views/dashboard.php';
     }
 }
 ?>