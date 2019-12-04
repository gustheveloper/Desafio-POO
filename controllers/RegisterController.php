<?php
include_once "models/Register.php";

class RegisterController

{
    public function acao($rotas){
    switch($rotas){
      case "cadastrar-usuario":
          $this->viewCadastro();
      break;
      case "cadastrar-user":
          $this->cadastroUser();
      break;
    }
  }

    public function viewCadastro(){
        include "views/registers.php";
    }

    public function cadastroUser(){
    $cadastro = new Cadastrar();
    $nome = $_POST['fullName'];
    $username = $_POST['username'];
    $senha = $_POST['password'];

    $certo = $cadastro->cadastrarUsuario($nome, $username, $senha);
    if($certo){
      header('Location:/fake-instagram-POO/posts');
    }else{
      echo "Nao foi possível se cadastrar.";
    }
}
}
?>
