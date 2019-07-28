<!DOCTYPE html>
<html lang="pt">
<head>

  <title>Fale conosco</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

  <?php include "nav.php";?>


  <!-- INICIO CODIGO FORM -->

<div align="center">
  <h3>Gostaria de nos enviar alguma sugestão, crítica ou tirar alguma duvida? 
    <p>Insira seus dados nos campos abaixo e nos envie!!</h3></p></div>

<div class="container" align="center">
<div class="col-md-4"></div>
<div class="col-md-4"><br/>
    <fieldset class="form-group">
    <legend>Dados pessoais</legend> 

<div class="label-float">
  <input type="text" placeholder=" " required/>
  <label>Nome:</label>
</div>

<br/>

<div class="label-float">
  <input type="email" placeholder=" " required/>
  <label>E-mail:</label>
</div>

<br>
    <div class="label-float">
  <input type="number" placeholder=" " required/>
  <label>Telefone:</label>
</div>
  
   <br> <div class="form-group">
    <p><h4>Digite aqui seu comentário:</h4></p><br/>
    <textarea class="label-float" rows="5" cols="35" placeholder="" required></textarea></div>
    
    <button class="btn btn-success" >Enviar</button>
</div></div>
<div class="col-md-4" ></div>
</div>

<!-- FIM CODIGO FORM -->

</body>

</html>