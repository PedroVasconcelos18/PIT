<?php include "header.php";?>
<?php include "nav.php";?>
<body>

  <br/> <div align='center'>
    <h2>Vagas disponíveis </h2>
  <?php if (isset($_SESSION['empresa']) == true){ ?>
    <div align='center'>
    <form action="cadastroVaga.php">
    <button class="btn btn-success">Cadastrar nova vaga</button>
  </div>
</form>
  <?php } else {

  } ?>
    
    
</div>
    <br/>
    <div class="container" align="center">
        <div class="col-md-4">
    <div class="card carta" style="width: 18rem;">
    <a href="cozinha.php" ><img class="card-img-top" src="imagens/cozinha.jpg" alt="Card image cap"></a>
  <div class="card-body">
    <p id="cozinha" class="card-text card1">Cozinha</p>
  </div>
</div>
        </div>

        <div class="col-md-4">
    <div class="card carta" style="width: 18rem;">
    <a href="vendas.php" ><img class="card-img-top" src="imagens/vendas.jpg" alt="Card image cap"></a>
  <div class="card-body">
    <p id="vendas" class="card-text">Vendas</p>
  </div>
</div>
        </div>

        <div class="col-md-4">
    <div class="card carta" style="width: 18rem;">
    <a href="admin.php" ><img class="card-img-top" src="imagens/admin.jpg" alt="Card image cap"></a>
  <div class="card-body">
    <p id="admin" class="card-text">Administração</p>
  </div>
</div>
        </div>
    </div>
    <br>
<!-- COMEÇO DA SEGUNDA LINHA DE VAGAS -->
<hr>
    <div class="container" align="center">
        <div class="col-md-4">
    <div class="card carta" style="width: 18rem;">
    <a href="limpeza.php" ><img class="card-img-top" src="imagens//Limpeza.jpg" alt="Card image cap"></a>
  <div class="card-body">
    <p id="limpeza" class="card-text">Limpeza</p>
  </div>
</div>
        </div>

        <div class="col-md-4">
    <div class="card carta" style="width: 18rem;">
    <a href="auxili.php" ><img class="card-img-top" src="imagens/auxiliar.jpg" alt="Card image cap"></a>
  <div class="card-body">
    <p id="auxili" class="card-text">Auxiliar de <br> produção</p>
  </div>
</div>
        </div>

        <div class="col-md-4">
    <div class="card carta" style="width: 18rem;">
    <a href="pedagogia.php" ><img class="card-img-top" src="imagens/Pedagogia.jpg" alt="Card image cap"></a>
  <div class="card-body">
    <p id="pedago" class="card-text">Pedagogia</p>
  </div>
</div>
        </div>
    </div>
    <br>

    <hr>
     <!-- COMEÇO DA TERCEIRA LINHA DE VAGAS -->

     <div class="container" align="center">
        <div class="col-md-4">
    <div class="card carta" style="width: 18rem;">
    <a href="coding.php" ><img class="card-img-top" src="imagens/coding.jpg" alt="Card image cap"></a>
  <div class="card-body">
    <p id="coding" class="card-text">Programação</p>
  </div>
</div>
        </div>

        <div class="col-md-4 carta">
    <div class="card carta" style="width: 18rem;">
    <a href="infra.php" ><img class="card-img-top" src="imagens/infra" alt="Card image cap"></a>
  <div class="card-body">
    <p id="infra" class="card-text">Técnico em <br> infraestrutura</p>
  </div>
</div>
        </div>

        <div class="col-md-4">
    <div class="card carta" style="width: 18rem;">
  <a href="construcao.php" ><img class="card-img-top" src="imagens/pedreiro.jpg" alt="Card image cap"></a>
  <div class="card-body">
    <p id="pedreiro" class="card-text">Construção</p>
  </div>
</div>
        </div>
    </div>
</body>
<br/><br/>
</html>


<style>

    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.carta{
    border: 300px;

}

.card-img-top{
    height: 300px;
    width: 300px;
    border-radius: 15px;
    margin-left: -60px;
}
.card-text{
    font-size: 34px;
}

</style>




