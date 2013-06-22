<?php include_once 'template/header.php'; ?>
<?php 
include_once '../biblioteca/IncludeFile.php';
IncludeFile::load('aplicacao/Facade');

$facade = new Facade();

$facade->realizarLogin();

// Notem que a ação (action) do formulário irá encaminhar os dados por POST para mesma página,
// fazendo com que método chamada pelo Facade capture as informação e realize o login caso as informações estejam corretas
?>


<style>
	.form-signin {
	max-width: 300px;
	padding: 19px 29px 29px;
	margin: 0 auto 20px;
	background-color: #fff;
	border: 1px solid #e5e5e5;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	box-shadow: 0 1px 2px rgba(0,0,0,.05);
	}
	.form-signin .form-signin-heading,
	.form-signin .checkbox {
	margin-bottom: 10px;
	}
	.form-signin input[type="text"],
	.form-signin input[type="password"] {
	font-size: 16px;
	height: auto;
	margin-bottom: 15px;
	padding: 7px 9px;
	} 

</style>



<form class="form-signin" method="post" action="login.php">
<h2 class="form-signin-heading">Login</h2>
<input class="input-block-level" id="email" type="text" name="email" placeholder="Email">
<div id="labelEmail"></div>
<br>
<div id="labelEmailChange"></div>
<br>
<input class="input-block-level" id="senha" type="password" name="senha" placeholder="Password">
<input class="btn btn-large btn-primary" type="submit" onclick="return verificar();" name="Login" value="Login" id="BotaoLogin">
<a class="btn btn-large" href="index.php">Voltar</a>

</form>

<script type="text/javascript" src="../styles/js/Util.js"></script>
<script type="text/javascript" src="../styles/js/login.js"></script>


<?php include_once 'template/footer.php'; ?>