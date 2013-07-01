<?php include_once '../template/headerApp.php'; ?>
<?php 
include_once '../../biblioteca/IncludeFile.php';
IncludeFile::load('aplicacao/Facade');

$facade = new Facade();
$facade->processaSalvarTarefa();

?>

<link rel="stylesheet" href="<?php echo IncludeFile::getPathCss(); ?>/jquery.ui/jquery.ui.all.css">




<div class="jumbotron">
	<h1>Nova Tarefa</h1>
</div>
<hr>

<div class="row-fluid">
	<div class="span12">

		<form action="novaTarefa.php" class="form-horizontal" method="post">

			<fieldset>
				<div class="control-group">
					<label class="control-label" for="inputTitulo">Título:</label>
					<div class="controls">
						<input type="text" name="titulo" id="inputTitulo"
							placeholder="Título">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputDetalhe">Detalhe:</label>
					<div class="controls">
						<textarea rows="6" cols="70" name="detalhe" id="inputDetalhe"></textarea>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputDetalhe">Prioridade:</label>
					<div class="controls">
						<select name="prioridade">
							<option value="0">Selecione</option>
							<option value="3">Alta</option>
							<option value="2">Média</option>
							<option value="1">Baixa</option>
						</select>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="inputDetalhe">Categoria:</label>
					<div class="controls">
					<?php $facade->geraListaCategoria(); ?>
					</div>
				</div>

				<div class="control-group">
				<label class="control-label">Data:</label>
					<div class="controls">
						<input type="text" name="name_data" id="id_data">
					</div>
				</div>
				
				<div class="control-group">
					<div class="controls">
						<input type="submit" class="btn btn-success" value="Salvar" name="SalvarTarefa">
						<input type="button" class="btn btn-inverse" value="Voltar" onclick="window.history.back(-1)">
						
					</div>
				</div>
				
				



			</fieldset>


		</form>

	</div>
</div>

<?php 
IncludeFile::js('jquery2.0.2.js');
IncludeFile::js('jquery.ui/jquery.ui.core.js');
IncludeFile::js('jquery.ui/jquery.ui.widget.js');
IncludeFile::js('jquery.ui/jquery.ui.datepicker.js');
?>
<script type="text/javascript">
	//$(document).ready(function(){
	$("#id_data").datepicker();
	//});
</script>


<?php include_once '../template/footer.php'; ?>