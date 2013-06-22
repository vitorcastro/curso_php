// function Util()
// {
// 	this.isEmpty = function (value)	{

// 		if (value.length == 0) return true;
// 		return false;
// 	};
// }

function isEmpty(value)
{
	if (value.length == 0) 
		return true;
	
	return false;
}

function verificar()
{
	var pattern = /^[0-9]{6,8}$/;
	
	var senha = document.getElementById('senha').value;
	
	if (!pattern.test(senha)){
		alert("Senha deve conter somente números");		
		return false;
	}
}