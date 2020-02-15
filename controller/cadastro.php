<?php

$smarty = new Template();

$smarty->assign('PAG_CADASTRO', Rotas::pag_Cadastro());


$smarty->display('cadastro.tpl');


?>
