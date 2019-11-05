<?php include "header.php"?>
<?php include "nav.php"?>


<body>
<h4 align="center">Cadastro de nova vaga</h4><br><br>
<div class="col-md-11 control-label" align="right" >
        <p class="help-block"><h11>*</h11>Campo Obrigatório</p>
</div>
<div class="container">
  <form action="salvarVaga.php" method="post">
  <label>Nome da empresa: *</label>
<input class="form-control" type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
<br/>
  <div class="col-md-6">
  <label>CEP: *</label>
<input class="form-control" type="text" id="cep" name="cep" placeholder="Apenas números" required><br/>

<label>Logradouro: *</label>
<input class="form-control" type="text" id="logra" name="logra" placeholder="" required disabled><br/>

<label>N°: *</label>
<input class="form-control" type="text" id="numero" name="numero" placeholder="" required><br/>

<label>Bairro: *</label>
<input class="form-control" type="text" id="bairro" name="bairro" placeholder="" required disabled><br/>

<label>Cidade: *</label>
<input class="form-control" type="text" id="cidade" name="cidade" placeholder="" required disabled><br/>

<label>Estado: *</label>
<select class="form-control" id="uf" name="uf" required disabled>
      <option></option>
      		<option value="AC">Acre</option>
			<option value="AL">Alagoas</option>
			<option value="AP">Amapá</option>
			<option value="AM">Amazonas</option>
			<option value="BA">Bahia</option>
			<option value="CE">Ceará</option>
			<option value="DF">Distrito Federal</option>
			<option value="ES">Espírito Santo</option>
			<option value="GO">Goiás</option>
			<option value="MA">Maranhão</option>
			<option value="MT">Mato Grosso</option>
			<option value="MS">Mato Grosso do Sul</option>
			<option value="MG">Minas Gerais</option>
			<option value="PA">Pará</option>
			<option value="PB">Paraíba</option>
			<option value="PR">Paraná</option>
			<option value="PE">Pernambuco</option>
			<option value="PI">Piauí</option>
			<option value="RJ">Rio de Janeiro</option>
			<option value="RN">Rio Grande do Norte</option>
			<option value="RS">Rio Grande do Sul</option>
			<option value="RO">Rondônia</option>
			<option value="RR">Roraima</option>
			<option value="SC">Santa Catarina</option>
			<option value="SP">São Paulo</option>
			<option value="SE">Sergipe</option>
      		<option value="TO">Tocantins</option>
</select><br/>


<script type="text/javascript">
		$("#cep").focusout(function(){
			//Início do Comando AJAX
			$.ajax({
				//O campo URL diz o caminho de onde virá os dados
				//É importante concatenar o valor digitado no CEP
				url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
				//Aqui você deve preencher o tipo de dados que será lido,
				//no caso, estamos lendo JSON.
				dataType: 'json',
				//SUCESS é referente a função que será executada caso
				//ele consiga ler a fonte de dados com sucesso.
				//O parâmetro dentro da função se refere ao nome da variável
				//que você vai dar para ler esse objeto.
				success: function(resposta){
					//Agora basta definir os valores que você deseja preencher
					//automaticamente nos campos acima.
					$("#logra").val(resposta.logradouro);
					$("#bairro").val(resposta.bairro);
					$("#cidade").val(resposta.localidade);
					$("#uf").val(resposta.uf);
					//Vamos incluir para que o Número seja focado automaticamente
					//melhorando a experiência do usuário
					$("#numero").focus();
				}
			});
		});
  </script>

  

<label>Valor da bolsa: *</label>
<input class="form-control" type="text" id="bolsa" name="bolsa" placeholder="Digite aqui o valor da bolsa em reais" required>
<br/>

<label>Benefícios: *</label>
<input class="form-control" type="text" id="benefi" name="benefi" placeholder="Ex: Vale-Transporte, Vale-alimentação" required>
<br/>

<label>Observações: *</label>
<input class="form-control" type="text" id="obs" name="obs" placeholder="" required><br/>

<br/>

  </div>

  <div class="col-md-6">
  
  <label>Conhecimentos necessários: *</label>
<input class="form-control" type="text" id="CN" name="CN" placeholder="Ex: Saber cozinhar, saber costurar, ser amigável" required>
<br/>

<label>Horário de trabalho: *</label>
<input class="form-control" type="text" id="horaT" name="horaT" placeholder="" required>
<br/>

<label>Duração da vaga: *</label>
<input class="form-control" type="text" id="durac" name="durac" placeholder="" required>
<br/>

<label>Categoria: *</label>
<select name="catego" class="form-control">
<option></option>
<option value="Coz">Cozinha</option>
<option value="Ven">Vendas</option>
<option value="Adminis">Administração</option>
<option value="Limp">Limpeza</option>
<option value="Aux">Auxiliar de produção</option>
<option value="Pedg">Pedagogia</option>
<option value="Prog">Programação</option>
<option value="Infra">Técnino em infraestrutura</option>
<option value="Construc">Construção</option>
</select>
<br>

<label>N° de vagas: *</label>
<input class="form-control" type="text" id="vagas" name="vagas" placeholder="" required>
<br/>

<label>Contato: *</label>
<input class="form-control" type="text" id="contato" name="contato" placeholder="" required>
<br/>

<label>Sexo: *</label>
  <select class="form-control" id="sexo" name="sexo" required>
      <option></option>
          <option value="H">Homem</option>
          <option value="M">Mulher</option>
          <option value="I">Indiferente</option>
  </select>
<br/>

<label>Função a ser exercida: *</label>
<input class="form-control" type="text" id="func" name="func" placeholder="Digite aqui a função a ser exercida" required>
<br/>

  </div>

<div class="salvar" align="center">
<button class="btn btn-success butao1" id="button1">Salvar</button>
</div>
</form>

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
#button1{
        align:center;
        padding: 20px 261px;
        font-size: 32px;
    } 
h4{
	font-size: 32px; 
}
.help-block{
	font-size: 32px;
}
  </style>
