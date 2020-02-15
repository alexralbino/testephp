<h3>Meus Dados</h3>

<hr>
<form name="cadcliente" id="cadcliente" method="post" action="">
<section class="row" id="cadastro">



        <div class="col-md-4">
            <label>Nome:</label>
            <input type="text" value="{$NOME}" name="nome" class="form-control" minlength="3" required>


        </div>

        <div class="col-md-4">
            <label>CPF:</label>

            <input type="text" value="{$CPF}" name="cpf" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>Email:</label>

            <input type="email" value="{$EMAIL}" name="email" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>Padrão:</label>

            <input type="text" value="{$PADRAO}" name="padrao" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>CEP:</label>

            <input type="text" value="{$CEP}" name="cep" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>Logradouro:</label>

            <input type="text" value="{$LOGRADOURO}" name="logradouro" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>Numero:</label>

            <input type="text" value="{$NUMERO}" name="numero" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>Complemento:</label>

            <input type="text" value="{$COMPLEMENTO}" name="complemento" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>CIDADE:</label>

            <input type="text" value="{$CIDADE}" name="cidade" class="form-control" required>

        </div>

        <div class="col-md-4">
            <label>UF:</label>

            <input type="text" value="{$UF}" name="uf" class="form-control" required>

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
