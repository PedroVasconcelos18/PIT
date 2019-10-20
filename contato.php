<?php include "header.php";?>
<?php include "nav.php";?>


  
<body>
  <!-- INICIO CODIGO FORM -->
  <form method="POST" action="enviar.php">
<div align="center">
  <h3>Gostaria de nos enviar alguma sugestão, crítica ou tirar alguma duvida? 
    <p>Insira seus dados nos campos abaixo e nos envie!!</h3></p></div>

<div class="container" align="center">
<div class="col-md-2"></div>
<div class="col-md-8"><br/>
    <fieldset class="form-group">
    <legend>Dados pessoais</legend> 

<div class="label-float">
  <input name="nome" id="nome" type="text" placeholder=" " required/>
  <label>Nome:</label>
</div>
<br/>
<div class="label-float">
  <input name="email" id="email" type="email" placeholder=" " required/>
  <label>E-mail:</label>
</div>

<br>
    <div class="label-float">
  <input name="telefone" id="telefone"  type="text" placeholder=" " required/>
  <label>Telefone:</label>
</div>
  
   <br> <div class="form-group">
    <p><h4>Digite aqui seu comentário:</h4></p><br/>
    <textarea class="label-float" name="comentario" id="comentario" rows="5" cols="35" placeholder="" style="margin: 0px; height: 160px; width: 614px"; required></textarea></div>
    
    <button class="btn btn-success" type="submit">Enviar</button>
</div></div>
<div class="col-md-2" ></div>
</div></form>

<!-- FIM CODIGO FORM -->

</body>
</html>

<style>

.label-float{
  position: relative;
  padding-top: 10px;
}

.label-float input{
  border: 1px solid gray;
  border-radius: 5px;
  outline: none;
  
  min-width: 616px;
  
   padding: 15px 55px; 
  font-size: 16px;
  transition: all .1s linear;
  -webkit-transition: all .1s linear;
  -moz-transition: all .1s linear;
  -webkit-appearance:none;
}

.label-float input:focus{
  border: 2px solid #3951b2;
}

.label-float input::placeholder{
  color:transparent;
}

.label-float label{
  pointer-events: none;
  position: absolute;
  top: calc(50% - 8px);
  left: 70px;
  transition: all .1s linear;
  -webkit-transition: all .1s linear;
  -moz-transition: all .1s linear;
  background-color: white;
  padding: 5px;
  box-sizing: border-box;
}

.label-float input:required:invalid + label{
  color: 3951b2;
}
.label-float input:focus:required:invalid{
  border: 2px solid;
}
.label-float input:required:invalid + label:before{
  content: '';
}
.label-float input:focus + label,
.label-float input:not(:placeholder-shown) + label{
  font-size: 13px;
  top: 0;
  color: #3951b2;
}

</style>
