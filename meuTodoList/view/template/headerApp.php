<?php session_start(); ?>
<?php 
include_once '../../aplicacao/Seguranca.php';
Seguranca::usuarioLogado();
?>
<head>
	<title>Meu Todo List</title>
	<link rel="stylesheet" href="../../styles/css/bootstrap.css">
	<link rel="stylesheet" href="../../styles/css/bootstrap-responsive.min.css">
</head>

<div class="container">

      <div class="masthead">
        <h3 class="muted">Meu Todo List: <?php echo $_SESSION['email']; ?></h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li><a href="index.php">Minhas Tarefas</a></li>
                <li><a href="buscarTarefa.php">Buscar Tarefas</a></li>
                <li><a href="../encerrarSessao.php">Sair</a></li>
              </ul>
            </div>
          </div>
        </div> 
      </div>