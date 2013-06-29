<?php include_once 'template/header.php'; ?>

      <div class="jumbotron">
        <h1>Crie já a sua lista de tarefas</h1>
        <a class="btn btn-small btn-success" href="novoUsuario.php">Cadastre-se</a>
        <a class="btn btn-small btn-success" href="login.php" id="login">Faça o seu Login</a>
      </div>

      <hr>
      
      <div id="boxLogin" style="display: none;"></div>

      <div class="row-fluid">
        <div class="span12">
          <h2>Usuário Cadastrados</h2>
          <p>Veja a lista de usuários</p>
          <p><a class="btn btn-large" href="visualizarTodosUsuario.php">Ver todos &raquo;</a></p>
        </div>
      </div>

<script type="text/javascript" src="../styles/js/jquery2.0.2.js"></script>
<script type="text/javascript" src="../styles/js/index.js"></script>
      
<?php include_once 'template/footer.php'; ?>