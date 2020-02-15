<?php

$smarty = new Template();

$login = new Login();

if(isset($_POST['txt_email']) && isset($_POST['txt_senha'])){
	$user = $_POST['txt_email'];
	$senha = $_POST['txt_senha'];
	$login->GetLogin($user, $senha);
}

if(Login::Logado()){
	Login::MenuCliente();
}

$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_CADASTRO', Rotas::pag_Cadastro());


$smarty->display('login.tpl');


?>
