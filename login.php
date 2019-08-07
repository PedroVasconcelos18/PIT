<?php include "header.php";?>
<?php include "nav.php";?>
<body>
<h1 class="Login">Login</h1>
<br><br>

<div class="col-md-4"></div>

<div class="col-md-4" align="center">
<form method="post" action="autenticacao.php">
    <label>Digite seu CPF / CNPJ:</label><br/>
    <input class="form-control" placeholder="" type="text" id="cpfcnpj" name="cpfcnpj" required><br/>
    
    <label>Digite sua senha:</label><br/>
    <input class="form-control" placeholder="" type="password" id="senha" name="senha" required><br/>
    
    <button class= "btn btn-success" id="button1" >Entrar</button>

</div>
</form>
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
        padding: 20px 261px;
        font-size: 32px;
    }
label{
    font-size: 32px;
}
</style>