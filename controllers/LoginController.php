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
      }
    }

      private function viewLogin(){
          include "views/login.php";
      }
      private function logarUsuario()
      {
        $login = new Login;
        $username = $_POST['username'];
        $senha = $_POST['password'];

        $tentativa = $login->logarUser($username);
        $count = $tentativa->rowCount();
        if ($q > 0){
          echo "Corretíssimo, lesque";
        }else{
          echo "Nadaver";
        }
      }

}



 ?>
