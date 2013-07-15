<?php session_start(); ?>
<?php 
include_once '../../aplicacao/Seguranca.php';
Seguranca::usuarioLogado();
?>
<head>
	<title>Meu Todo List</title>
	<link rel="shortcut icon" href="../../styles/img/favicon.ico">

	<link rel="stylesheet" href="../../styles/css/bootstrap.css">
	<link rel="stylesheet" href="../../styles/css/bootstrap-responsive.min.css">
	<link rel="stylesheet" type="text/css" href="../../styles/css/jquery.ui/jquery.ui.css">
	<link rel="stylesheet" type="text/css" href="../../styles/css/estilo.css">
	
	<script type="text/javascript" src="../../styles/js/jquery2.0.2.js"></script>
	<script type="text/javascript" src="../../styles/js/jquery.ui/jquery.ui.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		//$("#menu").menu();
		//$("#menu").menu({position: {my: "center", at: "bottom+20"}});
	});
	</script>
	
	
</head>
<div class="container">

      <div class="masthead">
        <h3 class="muted">Meu Todo List: <?php echo $_SESSION['email']; ?></h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav" id="menu">
                <li id="1"><a href="index.php">Minhas Tarefas</a>
<!--                 <ul> -->
<!--                 	<li><a href="novaTarefa.php">Nova tarefa</a></li> -->
<!--                 </ul> -->
                
                </li>
                <li id="2"><a href="buscarTarefa.php">Buscar Tarefas</a></li>
                <li id="3"><a href="estatistica.php">Estatísticas</a></li>
                <li id="4"><a href="../encerrarSessao.php">Sair</a></li>
                
              </ul>
            </div>
          </div>
        </div> 
      </div>