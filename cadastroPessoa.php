<?php include "header.php";?>
<?php include "nav.php";?>
<body>

<form class="form-horizontal">
<fieldset>
<div class="form-group">

<div class="col-md-11 control-label">
        <p class="help-block"><h11>*</h11>Campo Obrigatório</p>
</div>
</div>
<div class="container" align="center">
	<h4> Cadastro de pessoa fisica</h4>
    </div>
    </br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">Nome: <h11>*</h11></label>  
  <div class="col-md-8">
  <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">CPF: <h11>*</h11></label>  
  <div class="col-md-2">
  <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
  </div>
  
  <label class="col-md-1 control-label" for="Nome"> Data de Nascimento:<h11>*</h11></label>  
  <div class="col-md-2">
  <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
</div>


<!-- Prepended text-->
<div class="form-group">
  
</div>


<!-- Search input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
  <div class="col-md-2">
    <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
  </div>
  <label class="col-md-2 control-label" for="prependedtext">Email: <h11>*</h11></label>
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
    </div>
  </div>
  
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Rua:</span>
      <input id="rua" name="rua" class="form-control" placeholder="" required="" type="text">
    </div>
    
  </div>
    <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon">Nº: <h11>*</h11></span>
      <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text">
    </div>
    
  </div>
  
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon">Bairro:</span>
      <input id="bairro" name="bairro" class="form-control" placeholder="" required="" type="text">
    </div>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext"></label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Cidade:</span>
      <input id="cidade" name="cidade" class="form-control" placeholder="" required="" type="text">
    </div>
    
  </div>
  
   <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon">Estado:</span>
      <input id="estado" name="estado" class="form-control" placeholder="" required="" type="text">
    </div>
    
  </div>
</div>

<div class="form-group">
    
  <label class="col-md-2 control-label" for="selectbasic">Escolaridade: <h11>*</h11></label>
  
  <div class="col-md-3">
    <select required id="escolaridade" name="escolaridade" class="form-control">
    <option value=""></option>
      <option value="Analfabeto">Analfabeto</option>
      <option value="Fundamental Incompleto">Fundamental Incompleto</option>
      <option value="Fundamental Completo">Fundamental Completo</option>
      <option value="Médio Incompleto">Médio Incompleto</option>
      <option value="Médio Completo">Médio Completo</option>
      <option value="Superior Incompleto">Superior Incompleto</option>
      <option value="Superior Completo">Superior Completo</option>
    </select>
  </div>

  <label class="col-md-1 control-label" for="profissao">Experiência Profissional:<h11>*</h11></label>  
  <div class="col-md-4">
  <input id="experiencia" name="profissao" type="text" placeholder="" class="form-control input-md" required="">
  </div>
</div>
    <div class="container" align="center">
    <button class="btn btn-success" id="button1">Salvar</button>
    </div>
<style>
#button1{
		padding: 5.2px;
		
		margin: auto;
		display: inline-block;
 		padding: 8px 25px;
  		font-size: 12px;
  		cursor: pointer;
  		text-align: center;
  		text-decoration: none;
  		outline: none;
  		color: #fff;
  		background-color: #4CAF50;
  		border: none;
  		box-shadow: 0 4.5px #999;
}

	#button1:hover {background-color: #3e8e41}

	#button1:active {
  		background-color: #3e8e41;
  		box-shadow: 0 5px #666;
  		transform: translateY(4px);
}


</style>