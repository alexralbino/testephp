<?php

class Login extends Conexao{
	private $user, $senha;

	function __construct(){
		parent::__construct();
	}

	function GetLogin($user, $senha){
		$this->setUser($user);
		$this->setSenha($senha);

		$query = "SELECT * FROM usuario,endereco WHERE email = :email AND senha = :senha AND usuario.id = endereco.usuario_id";

		$params = array(
			':email' => $this->getUser(),
			':senha' => $this->getSenha(),
			);

		$this->ExecuteSQL($query, $params);

		if($this->TotalDados() > 0){
			$lista = $this->ListarDados();

			$_SESSION['SESSION']['id'] = $lista['id'];
			$_SESSION['SESSION']['nome'] = $lista['nome'];
			$_SESSION['SESSION']['email'] = $lista['email'];
			$_SESSION['SESSION']['senha'] = $lista['senha'];
			$_SESSION['SESSION']['cpf'] = $lista['cpf'];
			$_SESSION['SESSION']['padrao'] = $lista['padrao'];
			$_SESSION['SESSION']['cep'] = $lista['cep'];
			$_SESSION['SESSION']['logradouro'] = $lista['logradouro'];
			$_SESSION['SESSION']['numero'] = $lista['numero'];
			$_SESSION['SESSION']['complemento'] = $lista['complemento'];
			$_SESSION['SESSION']['cidade'] = $lista['cidade'];
			$_SESSION['SESSION']['uf'] = $lista['uf'];
			Rotas::Redirecionar(0, Rotas::pag_Logado());
		}else{
			echo '<script> alert("Dados Incorretos"); </script>';
		}

	}

	static function Logado(){
		if(isset($_POST['txt_email']) && isset($_POST['txt_senha'])){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	private function setUser($user){
		$this->user = $user;
	}

	private function setSenha($senha){
		$this->senha = $senha;
	}

	function getUser(){
		return $this->user;
	}

	function getSenha(){
		return $this->senha;
	}


}

 ?>
