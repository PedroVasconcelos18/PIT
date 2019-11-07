<?php include "header.php";?>
<?php include "nav.php";?>
<!-- Isso é o jquery do CEP, para buscar os lugares   -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script> 

<!-- Isso é o jquery do CPF, para ter a mascara   -->
<script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"></script>

<script>

            // $(document).ready(function(){
			// 	$("#cpfcnpj").mask("99.999.999/9999-99");
			// });
            
            // $(document).ready(function(){
		    //     $("#cpfcnpj").mask("999.999.999-99");
	        // });

    </script>
<?php
if( isset($_SESSION['aposentadoautonomo']) || isset($_SESSION['empresa']) || isset($_SESSION['admin']) ){ ?>

<?php
        
        echo "
        <html lang=\'pt\'>
        
        <div class='container'>
        <br />
        <h1><div align='center'><h1>Você já está logado</h1></div>
        
        <form action='index.php'>
        <div class='butao' align='center'>
                    <button class='btn btn-primary btn-md butao' type='submit'>Clique aqui para ir a página inicial</button>
                    </div>
        </div>
        
            
        </form>";
?>

<?php } else {?>

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

<?php } ?>