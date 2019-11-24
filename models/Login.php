<?php
include_once 'Conexao.php';

class Login extends Conexao
{
  function LogarUser($username)
  {
    $db = parent::criarConexao();
    $query = $db->prepare("SELECT * FROM usuario WHERE username = ? LIMIT 1");
    return $query->execute([$username]);
    $resultado = $query->fetch(PDO::FETCH_OBJ);
  }
  function LogarSenha($senha)
  {
    $db = parent::criarConexao();
    $query = "SELECT * FROM usuario WHERE senha = '$senha' limit 1";
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
  }
}


 ?>
