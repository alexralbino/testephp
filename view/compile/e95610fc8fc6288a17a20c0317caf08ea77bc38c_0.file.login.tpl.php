<?php
/* Smarty version 3.1.31, created on 2020-02-15 14:55:16
  from "C:\xampp\htdocs\php\view\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e47f8449baa37_26044398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e95610fc8fc6288a17a20c0317caf08ea77bc38c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\view\\login.tpl',
      1 => 1581774201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e47f8449baa37_26044398 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="row" id="fazerlogin">

    <form name="cliente_login" method="post" action="" >

        <div class="col-md-4 text-center">






        </div>

        <!---  aqui estão os campos -->
        <div class="col-md-4">


            <div class="form-group">
                <label></i> Email: </label>
                <input type="email"  class="form-control " name="txt_email" value="" placeholder="Digite seu email" required autocomplete="off">

            </div>


            <div class="form-group">
                 <label> Senha: </label>
                 <input type="password"  class="form-control " name="txt_senha" value="" placeholder="Digite sua senha" required>

            </div>


            <div class="form-group">

                <button class="btn btn-geral btn-block btn-lg"><i class="glyphicon glyphicon-log-in"></i> Entrar </button>




            </div>
            <div class="form-group">

                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
" class="btn btn-default "><i class="glyphicon glyphicon-pencil"></i> Me Cadastrar</a>


                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_RECOVERY']->value;?>
" class="btn btn-default "><i class="glyphicon glyphicon-question-sign"></i> Esqueci a Senha</a>



            </div>


        </div><!-- fim dos campos -->


        <div class="col-md-4 text-center">


        </div>

    </form>


</section>
<?php }
}
