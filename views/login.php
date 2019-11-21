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

    <?php include 'C:\xamppy\htdocs\fake-instagram-POO\views\includes\header.php'; ?>

    <main class="board-two">
        <h1>Login</h1>
        <form class="d-flex flex-column justify-content-center col-6" action="index.php" method="post">
          <label for="full-name">Username</label>
          <input type="text" name="full-name" placeholder=>
          <label for="password">Senha</label>
          <input type="password" name="password" value="">
          <button type="submit" class="btn btn-success">Entrar</button>

        </form>
</body>
</html>
