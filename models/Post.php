<?php

include_once "Conexao.php";


class Post extends Conexao {


    public function criarPost($image, $descricao, $user){
        $db = parent::criarConexao();
        $query = $db->prepare("INSERT INTO posts (img, descricao, id_user) values(?,?, ?)");
        return $query->execute([$image, $descricao, $user]);
    }

    public function listarPosts(){
        $db = parent::criarConexao();
        $query = $db->query('SELECT * FROM posts inner join usuario on posts.id_user = usuario.id_user ORDER BY id_post DESC');
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

}
