<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>
<li><a href="index.php">Página Inicial</a></li>
      <li><a href="Blog.php">Comunidade</a></li>
      <li><a href="contato.php">Contato</a></li>
      <li><a href="empregos.php">Vagas disponíveis</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Cadastrar
        <span class="caret"></span></a>
          <li><a href="cadastroEmpresa.php">Cadastro de Pessoa Juridica</a></li>
          <li><a href="cadastroPessoa.php">Cadastro de Pessoa fisica</a></li>
  <?php if(isset($_SESSION['aposentadoautonomo']) || isset($_SESSION['empresa']) ){ ?>}
  <li style="float:right"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
<?php } else { ?>
    <li style="float:right"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
<?php } ?>
</ul>

</body>
</html>
