<?php

  include_once "Conexao.php";

  class Cadastrar extends Conexao{

    public function cadastrarUsuario($nome, $username, $senha)
    {
      $db = parent::criarConexao();
      $query = $db->prepare("INSERT INTO usuario (nome, username, senha) values(?,?,?)");
      return $query->execute([$nome, $username, $senha]);
    }
  }


 ?>
