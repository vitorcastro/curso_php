<?php include_once 'template/header.php'; ?>
<?php 
	if (isset($_SESSION['email']))
	{
?>
	<h3>Bem vindo: <?php echo $_SESSION['email']; ?></h3>
	<a href="encerrarSessao.php" class="btn btn-danger">Sair</a>
	
<?php } ?>

      <div class="jumbotron">
        <h1>Crie já a sua lista de tarefas</h1>
        <a class="btn btn-large btn-success" href="novoUsuario.php">Cadastre-se</a>
        <a class="btn btn-large btn-success" href="login.php">Faça o seu Login</a>
      </div>

      <hr>

      <div class="row-fluid">
        <div class="span12">
          <h2>Usuário Cadastrados</h2>
          <p>Veja a lista de usuários</p>
          <p><a class="btn btn-large" href="visualizarTodosUsuario.php">Ver todos &raquo;</a></p>
        </div>
      </div>

<?php include_once 'template/footer.php'; ?>