<?php include "header.php";?>
<?php include "nav.php";?>
<body>
<div class="container" align="center">
	<h4> Cadastro de pessoa juridica</h4>
<div class="col-md-2 text1"></div>
<div class="col-md-4"><br/>
	<p>Digite seu CNPJ:</p><br/>
	<input class="form-control" placeholder="" type="text" id="cnpj" name="cnpj" required=""><br/>
	<p>Digite seu e-mail:</p><br/>
	<input class="form-control" placeholder="" type="email" id="email" name="email" required=""><br/>
	<p>Digite seu telefone:</p><br/>
	<input class="form-control" placeholder="" type="tel" id="phone" name="phone" required="">
</div>
<div class="col-md-4 text2"><br/>
	<p>Digite seu nome:</p><br/>
	<input class="form-control" placeholder=" " type="text" required=""><br/>
	<p align="center">Digite o ramo da empresa:</p><br/>
	<input class="form-control" placeholder=" Ex: Administração, Vendas, Manutenção" type="text" required=""><br/>
	<br/>
<br/>
<button class="btn btn-success" id="button1">Salvar</button>

</div>
</div>  <!-- fecha o container -->
<div class="col-md-2"><br/>
</div>

</body>
</html>
<style>
	#text1 {
		background-color: black;
	}
#text2 {
		background-color: pink;
	}

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