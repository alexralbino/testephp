<?php

require './lib/autoload.php';

if(!isset($_SESSION)){
	session_start();

}

$smarty = new Template();

//valores para o template
$smarty->assign('NOME', 'Teste');
$smarty->assign('GET_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->display('index.tpl');
 ?>
