<h1>Calculadora On-line</h1>

<form method="post" action="processaCalculadora.php">

<fieldset>
	<legend>Calculadora</legend>
	Numero 1:
	<input type="text" name="numero1" size="5" maxlength="5">
	
	<!--  <select name="operador">
		<option value="1">Somar</option>
		<option value="2">Subtrair</option>
		<option value="3">Multiplicar</option>
		<option value="4">Dividir</option>
	</select>  --> 
	
	<br/>
	
	 <input type="radio" name="operador" value="1">Somar
	<input type="radio" name="operador" value="2">Subtrair
	<input type="radio" name="operador" value="3">Multiplicar
	<input type="radio" name="operador" value="4">Dividir 
	
	<!-- <input type="checkbox" name="operador[]" value="1">Somar
	<input type="checkbox" name="operador[]" value="2">Subtrair
	<input type="checkbox" name="operador[]" value="3">Multiplicar
	<input type="checkbox" name="operador[]" value="4">Dividir -->
	
	<br/>
	
	Numero 2: 
	<input type="text" name="numero2" size="5" maxlength="5">
	
	<input type="submit" value="Calcular">
	
	</fieldset>

</form>