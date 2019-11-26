<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/styles2.css">
</head>
<body>

    <?php include 'views\includes\header.php'; ?>

    <main class="board-two">
        <h1>Cadastro de Novo Usuário</h1>
        <form class="d-flex flex-column justify-content-center col-6" action="/fake-instagram-POO/cadastrar-user" method="POST" enctype="multipart/form-data">
          <label for="full-name">Nome Completo</label>
          <input type="text" name="fullName" placeholder="Coloque seu nome">
          <label for="birth">Data de Nascimento</label>
          <input type="date" name="birth">
          <label for="username">Escolha seu Username</label>
          <input type="text" name="username" placeholder="Seja criativo">
          <label for="password">Escolha sua senha</label>
          <input type="password" name="password" placeholder="Não vamos contar para ninguém">
          <button type="submit" class="btn btn-success">Enviar</button>
        </form>
</body>
</html>
