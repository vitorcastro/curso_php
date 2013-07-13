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
			<td>Título</td>
			<td>Detalhe</td>
			<td>Prioridade</td>
			<td>Excluir</td>
		</tr>
	</thead>
	
	<?php foreach ($tarefas as $tarefa) { ?>
	<tr>
		<td><?php echo $tarefa->getTitulo(); ?></td>
		<td><?php echo $tarefa->getDetalhe(); ?></td>
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
     <?php 
     IncludeFile::js('jquery2.0.2.js');
     IncludeFile::js('jquery.ui/jquery.ui.js');
     ?>
    <script type="text/javascript">
	$().ready(function() {

		/* usando jSON
		var json = $.getJSON('_jSONCategorias.php', function(data) {

			var categorias = [];
			var index = 0;
			$.each(data, function(key, val) {
				categorias[index] = val.descricao;
				index++;
			});

			$( "input[name=busca]").autocomplete({
				source: categorias
			});
		});
		*/

		// usando XML
		$.ajax({
			url: "_xmlCategorias.php",
			dataType: "xml",
			success: function (xml){
				var categorias = [];
				var index = 0;

				$(xml).find("categoria").each(function(){
					categorias[index] = $(this).find("descricao").text();
					index++;
				});

				$( "input[name=busca]").autocomplete({
					source: categorias
				});
			},
		});
		

	});

    </script>

<?php include_once '../template/footer.php'; ?>