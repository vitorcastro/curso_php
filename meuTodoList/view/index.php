<?php include_once 'template/header.php'; 
include_once '../biblioteca/IncludeFile.php';
?>
 <style>
.ui-tabs-vertical { width: 100%; }
.ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
.ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
.ui-tabs-vertical .ui-tabs-nav li a { display:block; }
.ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; border-right-width: 1px; }
.ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 80%;}
</style>

<div id="dialog-usuario"></div>

<div class="jumbotron">
	<h1>Crie já a sua lista de tarefas</h1>
	<a class="btn btn-small btn-success" id="novoUsuario">Cadastre-se</a> <a
		class="btn btn-small btn-success" href="login.php" id="login">Faça o
		seu Login</a>
</div>

<hr>

<div id="boxLogin"
	style="display: none;"></div>

<div class="row-fluid">
	<div class="span12">
		<h2>Usuário Cadastrados</h2>
		<p>Veja a lista de usuários</p>
		<p>
			<a class="btn btn-large" href="visualizarTodosUsuario.php">Ver todos
				&raquo;</a>
		</p>
		<div id="tabs">
		<ul>
			<li><a href="#tab-1"><span>Funcionalidades</span></a></li>
			<li><a href="#tab-2" id="tab-2-load"><span>Sobre</span></a></li>
			<li><a href="#tab-3"><span>Teste</span></a></li>
		</ul>

			<div id="tab-1">
				<p>Funcionalidades</p>
			</div>
			<div id="tab-2">
				Sobre
			</div>
			<div id="tab-3">
				EJI
			</div>

		</div>
		
		
	</div>
	
	

</div>

<?php 

IncludeFile::js('jquery2.0.2.js');
IncludeFile::js('jquery.ui/jquery.ui.js');
IncludeFile::js('index.js');

?>

<?php include_once 'template/footer.php'; ?>