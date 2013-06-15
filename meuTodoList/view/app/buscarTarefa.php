<?php include_once '../template/headerApp.php'; ?>

<?php 
include_once '../../biblioteca/IncludeFile.php';
IncludeFile::load('aplicacao/Facade');

$facade = new Facade();

$tarefas = $facade->realizarBuscaTarefas();

?>
      <div class="jumbotron">
        <h1>Buscar Tarefas</h1>
      </div>
      <hr>

      <div class="row-fluid">
        <div class="span12">
        <form method="post" name="form" class="form-search">
        <input type="text" name="busca" class="search-query">
        <input type="submit" name="RealizarBusca" value="Buscar" class="btn btn-primary">
        </form>
        
        
        
	<?php if ($tarefas) { ?>
        <table class="table table-striped">
	<thead>
		<tr>
			<td>T�tulo</td>
			<td>Detalhe</td>
			<td>Prioridade</td>
			<td>Editar</td>
			<td>Excluir</td>
		</tr>
	</thead>
	
	<?php foreach ($tarefas as $tarefa) { ?>
	<tr>
		<td><?php echo $tarefa->getTitulo(); ?></td>
		<td><?php echo $tarefa->getDetalhe(); ?></td>
		<td><?php echo $facade->getPrioridadeById($tarefa->getPrioridade()); ?></td>
		<td><a class="btn btn-inverse" href="editarTarefa.php?id=<?php echo $tarefa->getId(); ?>"><i class="icon-edit icon-white"></i></a></td>
		<td><a class="btn btn-danger" href="index.php?excluir=1&amp;id=<?php echo $tarefa->getId(); ?>"><i class="icon-remove icon-white"></i></a></td>
		
	</tr>
	<?php } ?>
</table>
<br>
<?php } else { ?>
	<div class="alert alert-block" style="margin-top: 10px;">N�o Existem Tarefas Cadastrados</div>
<?php } ?>
        
        
        
        </div>
      </div>

<?php include_once '../template/footer.php'; ?>