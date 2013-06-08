<?php include_once 'template/header.php'; ?>

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



<form class="form-signin" method="post" action="processaLogin.php">
<h2 class="form-signin-heading">Login</h2>
<input class="input-block-level" type="text" name="email" placeholder="Email">
<input class="input-block-level" type="password" name="senha" placeholder="Password">
<input class="btn btn-large btn-primary" type="submit" name="Login" value="Login">
<a class="btn btn-large" href="index.php">Voltar</a>

</form>

<?php include_once 'template/footer.php'; ?>