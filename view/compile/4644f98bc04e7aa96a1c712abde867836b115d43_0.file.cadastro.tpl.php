<?php
/* Smarty version 3.1.31, created on 2020-02-15 18:16:29
  from "C:\xampp\htdocs\php\view\cadastro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e48276d509f34_15765477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4644f98bc04e7aa96a1c712abde867836b115d43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\view\\cadastro.tpl',
      1 => 1581786969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e48276d509f34_15765477 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Dados para Cadastro</h3>

<hr>




  <form name="cadcliente" id="cadcliente" method="post" action="">

<section class="row" id="cadastro">



        <div class="col-md-4">
            <label>Nome:</label>
            <input type="text" value="" name="nome" class="form-control" minlength="3" required>


        </div>

        <div class="col-md-4">
            <label>CPF:</label>

            <input type="text" value="" name="cpf" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>Email:</label>

            <input type="email" value="" name="email" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>Senha:</label>

            <input type="text" value="" name="senha" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>Padrão:</label>

            <input type="text" value="" name="padrao" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>CEP:</label>

            <input type="text" value="" name="cep" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>Logradouro:</label>

            <input type="text" value="" name="logradouro" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>Numero:</label>

            <input type="text" value="" name="numero" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>Complemento:</label>

            <input type="text" value="" name="complemento" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>CIDADE:</label>

            <input type="text" value="" name="cidade" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>UF:</label>

            <input type="text" value="" name="uf" class="form-control" required>

        </div>

</section>

      <br>
      <br>

      <section class="row" id="btngravar">

       <div class="col-md-4"></div>

       <div class="col-md-4">
           <button type="submit" class="btn btn-info btn-block "> <i class="glyphicon glyphicon-ok"></i> Cadastrar </button>


       </div>

       <div class="col-md-4"></div>


</section>


         </form>



<br>
<br>
<br>
<br>
<?php }
}
