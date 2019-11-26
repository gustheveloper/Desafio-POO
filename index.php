<?php

    $rotas = key($_GET)?key($_GET):"posts";


    switch($rotas){
        case "posts":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($rotas);
        break;

        case "formulario-post":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($rotas);
        break;

        case "cadastrar-post":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($rotas);
        break;

        case "cadastrar-usuario":
            include "controllers/RegisterController.php";
            $controller = new RegisterController();
            $controller->acao($rotas);
        break;

        case "cadastrar-user":
            include "controllers/RegisterController.php";
            $controller = new RegisterController();
            $controller->acao($rotas);
        break;

        case "login":
            include_once "controllers/LoginController.php";
            $controller = new LoginController();
            $controller->acao($rotas);
          break;

        case "logar":
            include_once "controllers/LoginController.php";
            $controller = new LoginController();
            $controller->acao($rotas);
        break;

        case "sair":
            include_once "controllers/LoginController.php";
            $controller = new LoginController();
            $controller->acao($rotas);
        break;


    }
