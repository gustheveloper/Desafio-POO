<?php
include_once "models/Post.php";
include_once "models/Register.php";

class PostController {

    public function acao($rotas){
        switch($rotas){
            case "posts":
               $this->listarPosts();
            break;
            case "formulario-post":
                $this->viewFormularioPost();
            break;
            case "cadastrar-post":
                $this->cadastroPost();
            break;
            case "cadastrar-usuario":
                $this->viewCadastro();
            break;
            case "cadastrar-user":
                $this->cadastroUser();
            break;
            case "login":
                $this->viewLogin();
            break;

        }
    }

    private function viewFormularioPost(){
        include "views/newPost.php";
    }

    private function viewPosts(){
        include "views/posts.php";
    }

    private function cadastroPost(){
        $post = new Post();
        $descricao = $_POST['descricao'];
        $nomeArquivo = $_FILES['img']['name'];
        $linkTemp = $_FILES['img']['tmp_name'];
        $caminhoSalvar = "views/img/$nomeArquivo";
        move_uploaded_file($linkTemp, $caminhoSalvar);

        $resultado = $post->criarPost($caminhoSalvar, $descricao);

        var_dump($resultado);
        if($resultado){
            header('Location:/fake-instagram-POO/posts');
        }else {
            echo "Nao foi possível cadastrar seu post.";
        }
    }

    private function cadastroUser(){
        $cadastro = new Cadastrar();
        $nome = $_POST['fullName'];
        // $nasc = $_POST['birth'];
        $username = $_POST['username'];
        $senha = $_POST['password'];

        $batata = $cadastro->cadastrarUsuario($nome, $username, $senha);
        var_dump($batata);
        // if($batata){
        //   header('Location:/fake-instagram-POO/posts');
        // }else{
        //   echo "Nao foi possível se cadastrar.";
        // }
    }

    private function listarPosts(){
        $post = new Post();
        $listaPosts = $post->listarPosts();
        $_REQUEST['posts'] = $listaPosts;
        $this->viewPosts();
    }

    private function viewCadastro(){
        include "views/registers.php";
    }

    private function viewLogin(){
        include "views/login.php";
    }
}
