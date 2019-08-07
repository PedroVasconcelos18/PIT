<?php 
// Inicia sessões 
session_start(); 
 
/* Verifica se existe os dados da sessão de login 
//if(!isset($_SESSION["aposentadoautonomo"]) || !isset($_SESSION["empresa"])) 
{ 
// Usuário não logado! Redireciona para a página de login 
header("Location: ../pit/index.php");
exit;

}
*/ 
?>
<?php include "header.php";?>
<?php require "nav.php"?>
<body>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<h4 align="center">Bem-vindo a plataforma <br/> do Ative-se</h4>
<br/>
<p align="center"> Quem somos? </p>
<br/>
<p align="center"> Somos uma startup voltada para os aposentados e para os autônomos, 
    onde temos como objetivo auxiliar os aposentados a voltaraem ao mercado de trabalho 
    e incentivar os autonômos a venderem suas mercadorias em nossa comunidade.  </p>
<br/>
</div>

<div class="col-sm-4"></div>
<hr>
<div class="container">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<p align="center">Postagem   </p>
<br/>
</div>

<div class="col-sm-4"></div></div>