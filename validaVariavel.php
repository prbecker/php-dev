<?php 

	//a) Validar a variável: 
	$variavelA = 198;

	if(isset($variavelA))
	{
		if(is_int($variavelA))
		{
			echo "Válida";
		}
		else
		{
			echo "Inválida";
		}
	}
	else
	{
		echo "Inválida";
	}

	echo "<br><br>";

	//b) Validar o array e o indice “endereco”:
	$variavelB = [ "nome" => "Pedro Luiz", "endereco" => "Av Taquara", "telefone" => "(51) 5151-51511" ];

	if(isset($variavelB))
	{
		if(is_array($variavelB))
		{
			echo "Válida";
		}
		else
		{
			echo "Inválida";
		}
	}
	else
	{
		echo "Inválida";
	}

	echo "<br><br>";

	//c) Validar a variável: 
	$variavelC = "Romarinho";


	if(isset($variavelC))
	{
		if(is_string($variavelC))
		{
			echo "Válida";
		}
		else
		{
			echo "Inválida";
		}
	}
	else
	{
		echo "Inválida";
	}


?>