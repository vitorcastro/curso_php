<?php 
header("Content-type: text/html; charset=iso-8859-1");

include_once '../biblioteca/IncludeFile.php';
IncludeFile::load('aplicacao/Facade');


$facade = new Facade();
$facade->salvarUsuario();

// Notem que a a��o (action) do formul�rio ir� encaminhar os dados por POST para mesma p�gina,
// fazendo com que m�todo chamada pelo Facade capture as informa��o e realize o cadastro no BD 
?>
<form method="post" name="form" action="novoUsuario.php">
<label>Email:</label>
<input type="text" name="email" title="Email">

<label>Senha:</label>
<input type="password" name="senha" title="Senha">

<br>

<input type="submit" name="NovoUsuario" value="Salvar" class="btn btn-success">

</form>
