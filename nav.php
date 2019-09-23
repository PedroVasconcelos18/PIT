<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <div class="navbar-header">
     <a class="navbar-brand logo1"> <img src="imagens/logo.png" style="height: 45px;"><img/></a>
      <a class="navbar-brand" href="index.php"> Ative-se  </a>
    </div>
    <ul class="nav navbar-nav navbar-right">
    <?php if (isset($_SESSION['aposentadoautonomo']) || isset($_SESSION['empresa']) || isset($_SESSION['admin'])){ ?>

                    <li ><a class="textonav" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
         <?php } else { ?>
                    <li ><a class="textonav" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
                <?php } ?>
          </ul>
    <ul class="nav navbar-nav">
      <li ><a class="textonav" href="index.php">Página Inicial</a></li>
     <!-- <li ><a class="textonav" href="Blog.php">Comunidade</a></li> -->
      <li ><a class="textonav" href="contato.php">Contato</a></li>
      <li ><a class="textonav" href="empregos.php">Vagas disponíveis</a></li>
      
       <?php if (isset($_SESSION['aposentadoautonomo']) || isset($_SESSION['empresa']) || isset($_SESSION['admin'])) {?>
        
       <?php } else {?>
        <li class="dropdown">
        <a class="textonav" class="dropdown-toggle" data-toggle="dropdown" style="margin-top: 5px;">Cadastrar
        <span class="caret"></span></a>
<ul class="dropdown-menu"> 
          <li class="textonav"><a class="textonav" href="cadastroEmpresa.php">Cadastro de Pessoa Juridica</a></li>
          <li class="textonav"><a class="textonav" href="cadastroPessoa.php">Cadastro de Pessoa fisica</a></li>
          </ul>
       <?php } ?>
        </ul>
      </li>      
    </ul>
  </div>
</nav> 

<style>

.textonav{
  color: black;
  font-size: 30px;
  margin-top: 5px;
}
.navbar-brand{
  font-size: 32px;
  color: black;
  margin-top: 5px;
}
.logo1{
  margin-top: -8px;
  height: 30px;
}
.navbar-right{
  margin-top: -9.5px;
  height: 30px;
}
  </style>
