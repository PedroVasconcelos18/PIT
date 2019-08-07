<?php include "header.php";?>
<?php include "nav.php";?>
<?php session_start();?>
<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<h4 align="center">Cadastro de pessoa física</h4>
<div class="col-md-11 control-label" align="right" >
        <p class="help-block"><h11>*</h11>Campo Obrigatório</p>
</div>


<div class="container">
  <form action="cadastroAposentado.php" method="post">
  <label>Nome: *</label>
<input class="form-control" type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
<br/>
  <div class="col-md-6">

  <label>Senha: *</label>
<input class="form-control" type="text" id="senha" name="senha" placeholder="Digite aqui sua senha para entrar no site" required>
<br/>

  <label>CPF (APENAS NÚMEROS): *</label>
<input class="form-control" type="text" id="cpf" name="cpf" placeholder="Digite aqui seu CPF" required>
<br/>

<label>Data de nascimento: *</label>
<input class="form-control" type="date" id="nasc" name="dataNasc" placeholder="" required>
<br/>

<label>Email: *</label>
<input class="form-control" type="email" id="email" name="email" placeholder="email@email.com" required>
<br/>


<!-- <label>Escolaridade: *</label>
<select class="form-control" id="escolaridade" name="escolaridade">
  <option><option>
  <option value="LE">Leio e escrevo</option>
  <option value="FI">Ensino fundamental incompleto</option>
  <option value="FC">Ensino fundamental completo</option>
  <option value="MI">Ensino médio incompleto</option>
  <option value="MC">Ensino médio completo</option>
  <option value="SI">Ensino superior incompleto</option>
  <option value="SC">Ensino superior completo</option>
</select> -->
<br/>

  </div>

  <div class="col-md-6">
  
  <label>CEP: *</label>
<input class="form-control" type="text" id="cep" name="cep" placeholder="Apenas números" required><br/>

<label>Logradouro: *</label>
<input class="form-control" type="text" id="logra" name="logra" placeholder="" required disabled><br/>

<label>N°: *</label>
<input class="form-control" type="text" id="numero" name="num" placeholder="" required><br/>

<label>Bairro: *</label>
<input class="form-control" type="text" id="bairro" name="bairro" placeholder="" required disabled><br/>

<label>Cidade: *</label>
<input class="form-control" type="text" id="cidade" name="cidade" placeholder="" required disabled><br/>

<label>Estado: *</label>
<select class="form-control" id="uf" name="uf" required disabled>
      <option></option>
</select><br/>
  
  
  </div> <!-- termina o col-md-6 -->

  <div class="salvar" align="center">
<button class="btn btn-success butao1" id="button1">Salvar</button>
</div>

</form>

  </div> <!-- fecha o container -->

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

label{
	font-size: 25px;
}
h4{
	font-size: 32px;
}
.help-block{
	font-size: 32px;
}

#button1{
        align:center;
        padding: 20px 261px;
        font-size: 32px;
    }


  </style>