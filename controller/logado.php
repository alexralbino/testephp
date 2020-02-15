<?php

$smarty = new Template();


  if(isset($_SESSION['SESSION']['email']) and isset($_SESSION['SESSION']['senha'])){
       $nome = $_SESSION['SESSION']['nome'];
       $cpf       = $_SESSION['SESSION']['cpf'];
       $email     = $_SESSION['SESSION']['email'];
       $senha     = $_SESSION['SESSION']['senha'];
       $padrao     = $_SESSION['SESSION']['padrao'];
       $cep     = $_SESSION['SESSION']['cep'];
       $logradouro     = $_SESSION['SESSION']['logradouro'];
       $numero     = $_SESSION['SESSION']['numero'];
       $complemento     = $_SESSION['SESSION']['complemento'];
       $cidade     = $_SESSION['SESSION']['cidade'];
       $uf     = $_SESSION['SESSION']['uf'];

       $smarty->assign('NOME', $nome);
       $smarty->assign('EMAIL', $email);
       $smarty->assign('CPF', $cpf);
       $smarty->assign('PADRAO', $padrao);
       $smarty->assign('CEP', $cep);
       $smarty->assign('LOGRADOURO', $logradouro);
       $smarty->assign('NUMERO', $numero);
       $smarty->assign('COMPLEMENTO', $complemento);
       $smarty->assign('CIDADE', $cidade);
       $smarty->assign('UF', $uf);



  }
  $cadastro = new Clientes();
  if(!$cadastro->Editar($_SESSION['SESSION']['id'],$complemento,$_POST['padrao'],$nome, $cpf, $logradouro, $numero, $cidade, $uf, $cep,
   $email, $senha)){
         // echo '<div class="alert alert-danger">Ocorreu um erro ao editar os dados</div>';
         // exit();
  }else{
         // echo '<script> alert(" Dados alterados com sucesso! Atualizando os dados do Login...") </script>';
         // echo '<div class="alert alert-success">Dados atualizados com sucesso!  Atualizando os dados do Login...</div>';
  }

  $smarty->display('logado.tpl');


?>
