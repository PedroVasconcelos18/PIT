<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Ative-se </a>
    </div>
    <ul class="nav navbar-nav navbar-right">
    <?php if (isset($_SESSION['usuario'])){ ?>}
                    <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
         <?php } else { ?>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                <?php } ?>
          </ul>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Página Inicial</a></li>
      <li><a href="Blog.php">Comunidade</a></li>
      <li><a href="contato.php">Contato</a></li>
      <li><a href="empregos.php">Vagas disponíveis</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Cadastrar
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="cadastroEmpresa.php">Cadastro de Pessoa Juridica</a></li>
          <li><a href="cadastroPessoa.php">Cadastro de Pessoa fisica</a></li>
          </ul>
          
        </ul>
      </li>      
    </ul>
  </div>
</nav> 




          <script>

            </script>

  



<style>



li{
  color: white;
}


  </style>
