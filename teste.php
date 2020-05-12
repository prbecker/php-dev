<?php 

	function __autoload($nomeClasse)
	{
		require_once("$nomeClasse.php");
	}

	$user = new Usuario();

	$user->preencherDados("Paulo", "(51) 995084378", 1);
	$user->cadastrar();

	echo "Nome: " . $user->getNome() . "<br>";
	echo "Telefone: " . $user->getTelefone() . "<br>";
	echo "Nivel: " . $user->getNivel() . "<br>";
	echo "Data de cadastro: " . $user->getDataCadastro() . "<br>";
	
?>