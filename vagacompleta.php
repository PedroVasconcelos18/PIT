<?php
$idVaga = $_GET['id']; 

// $idVaga = base64_encode($idVaga);

?> 

<?php include "header.php";?>
<?php include "nav.php";?>
<?php include "conexao.php";?>
<body>
<div class="container" align="center">
	
   <br/> <h3>Vagas disponíveis</h3><br/>
    
<!-- <div class="col-sm-1">-->

</div> 
<table class="col-sm-12" id="table1" >
<?php 
// $sqlstring = ' ' .strval($idVaga). '";';
// echo $sqlstring;
 $sql = $conn->prepare("SELECT * FROM vagas where ID = ".$idVaga.";");
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_CLASS);
// var_dump($rows); die();
echo "
<table class='table table-striped'>";
    foreach ($rows as $row) {
        echo "      
        
        <tr>
        <th><h3>ID</th>
        <th><h3>Nome da empresa:</th>
        <th><h3>Função a ser exercida:</th>
        <th><h3>N° de vagas:</th>
        <th><h3>Conhecimentos Necessários:</th>  
        <th><h3>Contato:</th>
        <th><h3>Sexo:</th>
        <th><h3>Valor da bolsa:</th>
        <th><h3>Duracao da vaga:</th>
        <th><h3>Beneficios:</th>
        <th><h3>Observacoes:</th>
        <th><h3>Horario:</th>    
                </tr>     
                
        <td id='id' name='id'><h3> $row->ID </td>               
        <td><h3> $row->nomeEmpresa </td>  
        <td><h3> $row->funcaoExercida</td> 
        <td><h3> $row->numeroVagas</td> 
        <td><h3> $row->conhecimentosNecessarios</td>
        <td><h3> $row->Contato</td> 
        <td><h3> $row->Sexo</td>
        <td><h3> $row->valorBolsa</td>
        <td><h3> $row->DuracaoVaga</td>
        <td><h3> $row->Beneficios</td>
        <td><h3> $row->Observacoes</td>
        <td><h3> $row->HorarioTrabalho<h3></td>
        ";
        
        // botão de inscrição
       $idAposentado = $_SESSION['idAposentado'];
        if($_SESSION == isset($_SESSION['aposentadoautonomo'])){
           echo "<td>"; echo "<a class='btn btn-success' href='./autenticarIncrisc.php?iduser=$idAposentado&idvaga=$idVaga'>Inscrever</a>"; echo "</td>"; 
        }else {
          echo "<td><h2>Para se inscrever, por favor faça login</h3></td>";
        }

       // botão excluir
        echo "<td>"; 
        if($_SESSION == isset($_SESSION['empresa']))
        {
         if($_SESSION['idEmpresa'] == $row->Empresa_ID ){  
        echo "<a class='btn btn-danger' href='./excluirVaga.php?idvaga=$row->ID'>Excluir</a>  "; 
         }}else{
        
        } }  echo"</td>";
        
       
    echo "</table>";
    
    ?>
<br/><br/>
</form>

<!-- <div class="col-sm-1"></div>

</div> -->
<br>
<div class="container" >






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
.col-sm-10{
  float: left;
}
</style>