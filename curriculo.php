<?php include "header.php";?>
<?php include "nav.php";?>
<body>
	
<h4 align="center">Cadastro do currículo</h4>

<div class="col-md-11 control-label" align="right" >
        <p class="help-block"><h11>*</h11>Campo Obrigatório</p>
</div>
<div class="container" >
	

<div class="col-md-6">
<br><br>

	<form method="post" action="autenticar.php">
	<label>Formação acadêmica*</label>
	<textarea class="form-control" rows="5" placeholder="Coloque as funçoes já exercidas por você" type="text"  id="formacad" name="formacad" required> </textarea> 


<br><label>Resumo de habilidades*</label>
	<textarea class="form-control" rows="5" placeholder="Coloque as funçoes já exercidas por você" type="text"  id="reshab" name="reshab" required> </textarea> 

	<label>Telefone: *</label>
	<input class="form-control" placeholder="Digite seu telefone" type="tel" id="phone" name="phone" required><br/>

	


	



	
</div>

<div class="col-md-6 text2">
<br><br>
<label>Formação complementar*</label>
	<textarea class="form-control" rows="5" placeholder="Coloque as funçoes já exercidas por você" type="text"  id="formcomp" name="formcomp" required> </textarea> 

<br><label>Experiencia Profissional *</label>
	<textarea class="form-control" rows="5" placeholder="Coloque as funçoes já exercidas por você" type="text"  id="exppro" name="exppro" required> </textarea> 




	
 

</div>
</div> <br>
<div class="salvar" align="center">
	
<button class="btn btn-success" id="button1">Salvar</button>

</div>

</form>

  




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
    .text{
    	width: 90px;
    	height: 
    }
</style>