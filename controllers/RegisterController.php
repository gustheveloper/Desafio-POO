<?php
include_once "models/Register.php";

include_once 'views/registers.php';

class Cadastrar extends 

public function cadastroUser()
{

  $cadastro = new Cadastrar;
  $nome = $_POST['full-name'];
  $nasc = $_POST['birth'];
  $username = $_POST['username'];
  $senha = $_POST['password'];

  $batata = $cadastro -> cadastrarUsuario($nome,$nasc,$username,$senha);
  if (isset($batata)){
    header('Location:/fake-instagram-POO/posts');
  }else{
    echo "Nao foi possível se cadastrar.";
  }
}


 ?>
