<?php
include_once 'Conexao.php';

class Login extends Conexao
{
  function LogarUser($username, $senha)
  {
    $db = parent::criarConexao();
    $query = $db->prepare("SELECT * FROM usuario WHERE username = ? and senha = ? LIMIT 1");
    $query->bindParam(1, $username);
    $query->bindParam(2, $senha);
    $query->execute();

    if ($query->rowCount() == 1){
      session_start();
      $_SESSION['logged'] = true;
      $_SESSION['username'] = $username;
      header('Location:/fake-instagram-POO/posts');
    }else{
      $_SESSION['logged'] = false;
      header('Location:/fake-instagram-POO/login');
    }
    $resultado = $query->fetch(PDO::FETCH_ASSOC);


  }
  // function LogarSenha($senha)
  // {
  //   $db = parent::criarConexao();
  //   $query = $db->prepare("SELECT * FROM usuario WHERE senha = ? limit 1");
  //   $query->bindParam(1, $senha);
  //   $query->execute();
  //   $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
  // }
}

 ?>
