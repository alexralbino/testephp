<?php

class Clientes extends Conexao{
	 private  $cli_nome ,
            $cli_cpf ,
            $cli_padrao,
            $cli_logradouro,
            $cli_complemento ,
            $cli_numero ,
            $cli_cidade ,
            $cli_uf ,
            $cli_cep ,
            $cli_email ,
            $cli_senha;

	function __construct(){
		parent::__construct();
	}

	function Preparar($cli_complemento, $cli_padrao , $cli_nome, $cli_cpf,
            $cli_logradouro , $cli_numero  , $cli_cidade , $cli_uf , $cli_cep , $cli_email,
            $cli_senha){

        $this->setCli_nome($cli_nome);
        $this->setCli_complemento($cli_complemento);
        $this->setCli_cpf($cli_cpf);
        $this->setCli_padrao($cli_padrao);
        $this->setCli_numero($cli_numero);
        $this->setCli_logradouro($cli_logradouro);
        $this->setCli_cidade($cli_cidade);
        $this->setCli_uf($cli_uf);
        $this->setCli_cep($cli_cep);
        $this->setCli_email($cli_email);
        $this->setCli_senha($cli_senha);

    }

    function Inserir($cli_complemento, $cli_padrao , $cli_nome, $cli_cpf,
              $cli_logradouro , $cli_numero  , $cli_cidade , $cli_uf , $cli_cep , $cli_email,
              $cli_senha){
    	if($this->GetClienteCPF($this->getCli_cpf()) > 0){
    		echo '<div class="alert alert-danger " id="erro_mostrar"> Este CPF já existe';
    		echo '</div>';
    		exit();
    	}

    	if($this->GetClienteEmail($this->getCli_email()) > 0){
    		echo '<div class="alert alert-danger " id="erro_mostrar"> Este Email já existe';
    		echo '</div>';
    		exit();
    	}

    	//INSERIR OS DADOS

    	//query para inserir clientes

      $this->setCli_nome($cli_nome);
      $this->setCli_complemento($cli_complemento);
      $this->setCli_cpf($cli_cpf);
      $this->setCli_padrao($cli_padrao);
      $this->setCli_numero($cli_numero);
      $this->setCli_logradouro($cli_logradouro);
      $this->setCli_cidade($cli_cidade);
      $this->setCli_uf($cli_uf);
      $this->setCli_cep($cli_cep);
      $this->setCli_email($cli_email);
      $this->setCli_senha($cli_senha);

  $query = "INSERT INTO usuario (nome,cpf, email , senha) VALUES (:cli_nome, :cli_cpf,:cli_email,:cli_senha)";

        $params = array(
        ':cli_nome'     => $this->getCli_nome() ,
        ':cli_cpf'      => $this->getCli_cpf() ,
        ':cli_email'    => $this->getCli_email() ,
        ':cli_senha'    => $this->getCli_senha()
        );



    $this->ExecuteSQL($query, $params);

    $query ="SELECT id FROM usuario WHERE usuario.cpf = :cpf";

      $params = array(
      ':cpf'     => $this->getCli_cpf()
      );

    $lista = $this->ExecuteSQL($query, $params);
    $lista = $this->ListarDados();
    $query = "INSERT INTO endereco (usuario_id,padrao, cep , logradouro, numero, complemento,cidade,uf) VALUES (:id,:cli_padrao, :cli_cep,:cli_logradouro,:cli_numero,:cli_complemento,:cli_cidade,:cli_uf)";


    $params = array(
    ':id' => $lista['id'],
    ':cli_complemento'=> $this->getCli_complemento() ,
    ':cli_padrao'      => $this->getCli_padrao() ,
    ':cli_logradouro'     => $this->getCli_logradouro() ,
    ':cli_numero'   => $this->getCli_numero() ,
    ':cli_cidade'   => $this->getCli_cidade() ,
    ':cli_uf'       => $this->getCli_uf() ,
    ':cli_cep'      => $this->getCli_cep() ,
    );

    $this->ExecuteSQL($query, $params);

    }

    //MÉTODO EDITAR
    function Editar($id,$cli_complemento, $cli_padrao , $cli_nome, $cli_cpf,
              $cli_logradouro , $cli_numero  , $cli_cidade , $cli_uf , $cli_cep , $cli_email,
              $cli_senha){

        $query2 = " UPDATE endereco SET";
        $query2 .=" logradouro=:logradouro ,complemento=:complemento ,numero=:cli_numero,padrao=:padrao ,";
        $query2 .=" cidade=:cli_cidade ,uf=:cli_uf ,cep=:cli_cep ";
        $query2 .=" WHERE endereco.usuario_id = :id";
      //  $query .=" (:cli_nome, :cli_sobrenome,:cli_data_nasc,:cli_rg,";
      //  $query .=" :cli_cpf, :cli_ddd,:cli_fone,:cli_celular ,:cli_endereco ,:cli_numero,:cli_bairro ,";
      //  $query .=" :cli_cidade ,:cli_uf ,:cli_cep ,:cli_email ,:cli_data_cad, :cli_hora_cad, :cli_senha)";
        $params2 = array(
        ':padrao'     => $cli_padrao ,
        ':logradouro'  => $cli_logradouro ,
        ':complemento' => $cli_complemento ,
        ':cli_numero'   => $cli_numero  ,
        ':cli_cidade'   => $cli_cidade ,
        ':cli_uf'       => $cli_uf ,
        ':cli_cep'      =>  $cli_cep ,
        ':id'       => (int)$id

        );

				$query = " UPDATE usuario SET nome=:cli_nome,";
        $query .=" cpf=:cli_cpf,";
        $query .=" email=:cli_email , senha=:cli_senha ";
        $query .=" WHERE  usuario.id = :id";
      //  $query .=" (:cli_nome, :cli_sobrenome,:cli_data_nasc,:cli_rg,";
      //  $query .=" :cli_cpf, :cli_ddd,:cli_fone,:cli_celular ,:cli_endereco ,:cli_numero,:cli_bairro ,";
      //  $query .=" :cli_cidade ,:cli_uf ,:cli_cep ,:cli_email ,:cli_data_cad, :cli_hora_cad, :cli_senha)";

        $params = array(
        ':cli_nome'     => $cli_nome ,
        ':cli_cpf'      => $cli_cpf ,
        ':cli_email'    => $cli_email ,
        ':cli_senha'    => $cli_senha,
        ':id'       => (int)$id
        );


            if($this->ExecuteSQL($query, $params) and $this->ExecuteSQL($query2, $params2)):

                    return true;

            else:

                    return false;
            endif;


    }
    //BUSCAR SE O CPF DO CLIENTE JÁ EXISTE
    function GetClienteCPF($cpf){
    	$query = "SELECT * FROM usuario ";
    	$query .= " WHERE cpf = :cpf ";
    	$params = array(':cpf'=> $cpf);
    	$this->ExecuteSQL($query, $params);
    	return $this->TotalDados();
    }


    function GetClienteEmail($email){
    	$query = "SELECT * FROM usuario ";
    	$query .= " WHERE email = :email ";
    	$params = array(':email'=> $email);
    	$this->ExecuteSQL($query, $params);
    	return $this->TotalDados();
    }

    // GETTERS retornando os dados do cliente


    function getCli_nome() {
        return $this->cli_nome;
    }

    function getCli_logradouro() {
        return $this->cli_logradouro;
    }

    function getCli_cpf() {
        return $this->cli_cpf;
    }

    function getCli_padrao() {
        return $this->cli_padrao;
    }

    function getCli_complemento() {
        return $this->cli_complemento;
    }

    function getCli_numero(){

        return $this->cli_numero;

    }

    function getCli_cidade() {
        return $this->cli_cidade;
    }

    function getCli_uf() {
        return $this->cli_uf;
    }

    function getCli_cep() {
        return $this->cli_cep;
    }

    function getCli_email() {
        return $this->cli_email;
    }

    function getCli_senha() {
        return $this->cli_senha;
    }






    //  SETTERS do cliente

    function setCli_nome($cli_nome) {
      $this->cli_nome = $cli_nome;
    }

    function setCli_logradouro($cli_logradouro) {
      $this->cli_logradouro = $cli_logradouro;
    }

    function setCli_padrao($cli_padrao) {
        $this->cli_padrao = $cli_padrao;
    }

    function setCli_complemento($cli_complemento) {
        $this->cli_complemento = $cli_complemento;
    }

    function setCli_cpf($cli_cpf) {
          $this->cli_cpf = $cli_cpf;
    }
    function setCli_numero($cli_numero){

        $this->cli_numero = $cli_numero;
    }

    function setCli_cidade($cli_cidade) {
        $this->cli_cidade = $cli_cidade;
    }

    function setCli_uf($cli_uf) {

         $uf = filter_var($cli_uf, FILTER_SANITIZE_STRING);

       if(strlen($uf) != 2): // 11111
                echo '<div class="alert alert-danger " id="erro_mostrar"> UF incorreto ';
                echo '</div>';
           else:
           $this->cli_uf = $cli_uf;

       endif;

    }

    function setCli_cep($cli_cep) {

       $cep = filter_var($cli_cep, FILTER_SANITIZE_NUMBER_INT);

       if(strlen($cep) != 8):
                echo '<div class="alert alert-danger " id="erro_mostrar"> CEP incorreto, digite apenas números!! ';
                echo '</div>';

           else:
           $this->cli_cep = $cli_cep;

       endif;



    }

    function setCli_email($cli_email) {
        if(!filter_var($cli_email, FILTER_VALIDATE_EMAIL)):

                echo '<div class="alert alert-danger " id="erro_mostrar"> Email incorreto ';
                echo '</div>';

            exit();

        else:

                $this->cli_email = $cli_email;
        endif;
    }
    function setCli_senha($cli_senha) {

        $this->cli_senha = $cli_senha;
        // 123 => md5 = 18513ba35987a447b98f075bd226a1fc
    }





}





 ?>
