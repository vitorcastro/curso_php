<?php include_once '../template/headerApp.php'; ?>

<?php 
include_once '../../biblioteca/IncludeFile.php';
IncludeFile::load('aplicacao/Facade');

$facade = new Facade();

$facade->excluirTarefa();

$tarefas = $facade->buscaTodasTarefaDoUsuario();

?>
      <div class="jumbotron">
        <h1>Lista de tarefas</h1>
        <a id="efeito" class="btn">Opacidade</a>
        <a id="fonteMax" class="btn">Aumentar letra</a>
      </div>
      <hr>
      
      <h2>Lixeira</h2>
      <hr>
      <div class="lixeira">
      </div>

      <div class="row-fluid">
        <div class="span12">
        <a href="novaTarefa.php" class="btn btn-success btn-medium">Nova Tarefa</a>
        
	<?php if ($tarefas) { ?>
		<div class="tarefas">
			<?php foreach ($tarefas as $tarefa) { ?>
			<div class="item well">
				<?php echo $tarefa->getTitulo(); ?>
				<?php echo $facade->getPrioridadeById($tarefa->getPrioridade()); ?>
				<?php echo $tarefa->categoria; ?>
			
			</div>
			<?php } ?>
		</div>
<br>

<input name="const" type="hidden" value="<?php echo 44; ?>">

<?php } else { ?>
	<div class="alert alert-block" style="margin-top: 10px;">Não Existem Tarefas Cadastrados</div>
<?php } ?>
	<?php if ($tarefas) { ?>
	<div id="marcados">Selecionados: </div>
		<ol id="listaTarefas">
			<?php foreach ($tarefas as $tarefa) { ?>
			<li value="<?php echo $tarefa->getId(); ?>">
				<?php echo $tarefa->getTitulo(); ?>
				<?php echo $facade->getPrioridadeById($tarefa->getPrioridade()); ?>
				<?php echo $tarefa->categoria; ?>
			</li>
			<?php } ?>
		</ol>
<br>
<?php } ?> 

        </div>
      </div>
<?php 
IncludeFile::js('app.index.js');
?>

<?php include_once '../template/footer.php'; ?>