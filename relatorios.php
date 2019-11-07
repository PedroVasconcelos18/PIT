<?php

?>
<?php include "conexao.php"?>
<?php include "header.php"?>
<?php include "nav.php"?>


<?php if( isset( $_SESSION['AdminPermissao'] ) )  { 
        if( $_SESSION['AdminPermissao'] == 0 ) { ?>
        
<div class='container' align='center'><h3>Bem-vindo a página de relátorios, escolha uma das opções a seguir para visualizar!</h3></div>

<br><br>
<div class="col-sm-1"></div>
<div class="col-sm-10">
    <a href="contagemEmpresas.php" class="btn btn-success">Quantas empresas estão cadastradas no meu sistema?</a>
    <br><br>
    <a href="contagemAposentadosAutonomos.php" class="btn btn-success">Quantos aposentados/autonomos estão cadastrados no meu sistema?</a>
    
</div>
<div class="col-sm-1"></div>
<?php } } else {  ?>
    
    <div class='container-fluid' align='center'><h1>Opss!! Parece que você se enganou de página.</h1></div>

<br><br>
<div class="col-sm-1"></div>
<div class="col-sm-10" align='center'>
    <a href="index.php" class="btn btn-success"><h3>Clique aqui para voltar a página inicial</h3></a>
    <br/>
</div>
    
<?php }  ?> 

<style>

.btn{
    padding: 15px 65px;
    color: black;
}   



