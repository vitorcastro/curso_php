<?php include_once '../template/headerApp.php'; ?>

<?php 
include_once '../../biblioteca/IncludeFile.php';
IncludeFile::load('aplicacao/Facade');

$facade = new Facade();

$categorias = $facade->buscarTotalTarefaUsuarioPorCategoria();

$total = 0;

?>
      <div class="jumbotron">
        <h1>Estatísticas por Categoria</h1>
      </div>
      <hr>

      <div class="row-fluid">
        <div class="span12">
        
	<?php if ($categorias) { ?>
        <table class="table table-striped">
	<thead>
		<tr>
			<td>Categoria</td>
			<td>Total de Tarefas</td>
		</tr>
	</thead>
	
	<?php foreach ($categorias as $categoria) { ?>
	<tr>
		<td><?php echo $categoria->getDescricao(); ?></td>
		<td><?php echo $categoria->total; $total+= $categoria->total; ?></td>
	</tr>
	<?php } ?>
	
	<tr>
		<td><strong>TOTAL</strong></td>
		<td><strong><?php echo $total; ?></strong></td>
	</tr>
</table>
<br>
<?php } else { ?>
	<div class="alert alert-block" style="margin-top: 10px;">Não Existem Dados para Estatística</div>
<?php } ?>
        
        
        
        </div>
      </div>

<?php include_once '../template/footer.php'; ?>