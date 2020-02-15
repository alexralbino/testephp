<?php
/* Smarty version 3.1.31, created on 2020-02-15 20:18:11
  from "C:\xampp\htdocs\php\view\logado.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e4843f3d18264_71542938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15891a76d54c9e7fe8e47ba091130ab2a361c665' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\view\\logado.tpl',
      1 => 1581794289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4843f3d18264_71542938 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Meus Dados</h3>

<hr>
<form name="cadcliente" id="cadcliente" method="post" action="">
<section class="row" id="cadastro">



        <div class="col-md-4">
            <label>Nome:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
" name="nome" class="form-control" minlength="3" required>


        </div>

        <div class="col-md-4">
            <label>CPF:</label>

            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CPF']->value;?>
" name="cpf" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>Email:</label>

            <input type="email" value="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
" name="email" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>Padrão:</label>

            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['PADRAO']->value;?>
" name="padrao" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>CEP:</label>

            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CEP']->value;?>
" name="cep" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>Logradouro:</label>

            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['LOGRADOURO']->value;?>
" name="logradouro" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>Numero:</label>

            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['NUMERO']->value;?>
" name="numero" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>Complemento:</label>

            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['COMPLEMENTO']->value;?>
" name="complemento" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>CIDADE:</label>

            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CIDADE']->value;?>
" name="cidade" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>UF:</label>

            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['UF']->value;?>
" name="uf" class="form-control" required>

        </div>

</section>

      <br>
      <br>

      <section class="row" id="btngravar">

       <div class="col-md-4"></div>


       <div class="col-md-4"></div>


</section>

<section class="row" id="btngravar">

       <div class="col-md-4"></div>
           <button type="submit" class="btn btn-success btn-block "> <i class="glyphicon glyphicon-ok"></i> EDITAR </button>
           <button type="submit" class="btn btn-danger btn-block "> <i class="glyphicon glyphicon-ok"></i> EXCLUIR </button>
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
