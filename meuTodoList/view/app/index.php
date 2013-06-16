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
      </div>
      <hr>

      <div class="row-fluid">
        <div class="span12">
        <a href="novaTarefa.php" class="btn btn-success btn-medium">Nova Tarefa</a>
        
	<?php if ($tarefas) { ?>
        <table class="table table-striped">
	<thead>
		<tr>
			<td>Título</td>
			<td>Prioridade</td>
			<td>Excluir</td>
		</tr>
	</thead>
	
	<?php foreach ($tarefas as $tarefa) { ?>
	<tr>
		<td><?php echo $tarefa->getTitulo(); ?></td>
		<td><?php echo $facade->getPrioridadeById($tarefa->getPrioridade()); ?></td>
		<td><a class="btn btn-danger" href="index.php?excluir=1&amp;id=<?php echo $tarefa->getId(); ?>"><i class="icon-remove icon-white"></i></a></td>
		
	</tr>
	<?php } ?>
</table>
<br>
<?php } else { ?>
	<div class="alert alert-block" style="margin-top: 10px;">Não Existem Tarefas Cadastrados</div>
<?php } ?>
        
        
        
        </div>
      </div>

<?php include_once '../template/footer.php'; ?>