<?php
include_once 'models/Login.php';

class LoginController{
    public function acao($rotas){
      switch($rotas){
        case "login":
          $this->viewLogin();
        break;
        case "logar":
          $this->logarUsuario();
        break;
        case "sair":
        $this->logout();
      }
    }

      private function viewLogin(){
          include "views/login.php";
      }
      private function logarUsuario()
      {
        $login = new Login();
        $username = $_POST['username'];
        $senha = $_POST['password'];

        $tentativa = $login->logarUser($username, $senha);
        // if ($tentativa->rowCount() == 1){
        //   echo "Corretíssimo, lesque";
        // }else{
        //   echo "Nadaver";
        // }
      }

      private function logout()
      {
        session_start();
        session_destroy();
        header('Location:/fake-instagram-POO/login');
      }

}



 ?>
