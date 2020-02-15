<?php

$smarty = new Template();

if(isset($_POST['email']) AND
isset($_POST['senha']) AND
isset($_POST['nome']) AND
isset($_POST['cpf']) AND
isset($_POST['padrao']) and
isset($_POST['cep']) AND
isset($_POST['logradouro']) AND
isset($_POST['numero']) and
isset($_POST['complemento']) and
isset($_POST['cidade']) and
isset($_POST['uf'])){
    $cadastro = new Clientes();
    $cadastro->Inserir($_POST['complemento'],$_POST['padrao'],$_POST['nome'], $_POST['cpf'], $_POST['logradouro'], $_POST['numero'], $_POST['cidade'], $_POST['uf'], $_POST['cep'], $_POST['email'], $_POST['senha']);
    Rotas::Redirecionar(0,Rotas::pag_Login());
}
$smarty->display('cadastro.tpl');


?>
