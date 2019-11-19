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
        if($resultado){
            header('Location:/fake-instagram-POO/posts');
        }else {
            echo "Nao foi possível cadastrar seu post.";
        }
    }

    public function cadastroUser()
    {
      
      $cadastro = new Cadastrar;
      $nome = $_POST['full-name'];
      $senha = $_POST['password'];
      $username = $_POST['username'];
      $nasc = $_POST['birth'];

      $resultado = $cadastro->cadastrarUsuario($nome,$senha,$username,$nasc);
      if ($resultado){
        header('Location:/fake-instagram-POO/posts');
      }else{
        echo "Nao foi possível se cadastrar.";
      }
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
