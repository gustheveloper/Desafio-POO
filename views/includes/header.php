<?php
session_start();
?>

<head>

</head>

<header>
        <nav class="navbar topo-instagran d-flex justify-content-between">
            <a class="navbar-brand" href="posts"><img width="90" src="views\img\logo.png" alt="" srcset="">Instagram</a>
            <div class="menu">
            <?php if (isset($_SESSION['logged'])){ ?>
              <a> <?php echo $_SESSION['username']; ?> </a>
              <a href="sair">Sair</a>
              </div>
              <?php
          }elseif(!isset($_SESSION['logged'])){ ?>
            <a class="navbar-brand" href="login">Login</a>
          <?php } ?>
        </nav>
</header>
