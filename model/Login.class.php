<?php

class Login extends Conexao{
	private $user, $senha;

	function __construct(){
		parent::__construct();
	}

	static function MenuCliente(){

        $smarty = new Template();

        $smarty->display('menu.tpl');

  }

	function GetLogin($user, $senha){
		$this->setUser($user);
		$this->setSenha($senha);

		$query = "SELECT * FROM {$this->prefix}usuario WHERE email = :email AND senha = :senha";

		$params = array(
			':email' => $this->getUser(),
			':senha' => $this->getSenha(),
			);

		$this->ExecuteSQL($query, $params);

		if($this->TotalDados() > 0){
			$lista = $this->ListarDados();
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
