<?php

  include_once "Conexao.php";

  class Cadastrar extends Conexao
  {
    public function cadastrarUsuario($nome,$senha,$username,$nasc)
    {
      $db = parent::criarConexao();
      $query = $db->prepare("INSERT INTO usuario (nome, data_nasc, username, senha) values(?,?,?,?)");
      return $query->execute([$nome,$senha,$username,$nasc]);
    }
  }


 ?>
