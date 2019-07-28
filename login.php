<!DOCTYPE html>
<html lang="en">
<head>
 
<title>Ative-se</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php include "nav.php"?>
<h1 class="Login">Login</h1>
<br/><br/>

<div class="col-md-4"></div>
<div class="col-md-4" align="center">
<p>Digite seu CPF/ CNPJ:</p><br/>
	<input class="form-control" placeholder="" type="text" id="cpf/cnpj" name="cpf/cnpj" required=""><br/>
	<p>Digite sua senha:</p><br/>
	<input class="form-control" placeholder="" type="password" id="senha" name="senha" required=""><br/>
    <button class= "btn btn-success" id="button1" >Entrar</button>
</div>
<div class="col-md-4"></div>
</div>

</body>

<style>
p{
    text-align:center;
}
    .Login{

        text-align:center;
    }
    #button1{
        align:center;
    }
</style>