<?php include "header.php";?>
<?php include "nav.php";?>
<body>
<h1 class="Login">Login</h1>
<br><br>

<div class="col-md-4"></div>

<div class="col-md-4" align="center">

    <label>Digite seu CPF/ CNPJ:</label><br/>
    <input class="form-control" placeholder="" type="text" id="cpf/cnpj" name="cpf/cnpj" required><br/>
    
    <label>Digite sua senha:</label><br/>
    <input class="form-control" placeholder="" type="password" id="senha" name="senha" required><br/>
    
    <button class= "btn btn-success" id="button1" >Entrar</button>

</div>

<div class="col-md-4"></div>


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