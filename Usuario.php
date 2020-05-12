<?php 

	class Usuario extends Permissao
	{
		private $telefone;
		private $data_cadastro;
		private $nome;

		public function cadastrar()
		{
			try
			{
				if(isset($this->telefone) && isset($this->nome) && $this->getNivel() !== NULL)
				{
					$this->data_cadastro = date("d/m/Y - h:i");
				}
				else
				{
					throw new Exception('Alguns dados não foram preenchidos, por favor preencha todos os dados novamente'); 
				}
			}
			catch(Exception $e)
			{
				echo $e->getMessage() . "<br>";
			}
		}

		public function getTelefone()
		{
			return $this->telefone;
		}

		public function preencherDados($nome, $telefone, $nivel)
		{
			$this->nome = $nome;
			$this->telefone = $telefone;
			$this->setNivel($nivel);
		}

		public function getDataCadastro()
		{
			return $this->data_cadastro;
		}

		public function getNome()
		{
			return $this->nome;
		}
	}
?>