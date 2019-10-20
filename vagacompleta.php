<?php
$idVaga = $_GET['id'];  
?> 

<?php include "header.php";?>
<?php include "nav.php";?>
<?php include "conexao.php";?>
<body>
<div class="container" align="center">
	
   <br/> <h3>Vagas disponíveis</h3><br/>
    
<div class="col-sm-1">

</div> 
<table class="col-sm-10" id="table1" >
<?php 
 $sql = $conn->prepare("SELECT * FROM vagas where ID = ".$idVaga.";");
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_CLASS);
// var_dump($rows); die();
echo "
<div class='container' align='center'>
<table class='table table-striped'>";
    foreach ($rows as $row) {
        echo "      
        
            <tr>
        <th><h3>ID</th>
        <th><h3>Nome da empresa:</th>
        <th><h3>Função a ser exercida:</th>
        
        <th><h3>Conhecimentos Necessários:</th>  
        <th><h3>Contato:</th>
            </tr>  
        <td id='id' name='id'><h3> $row->ID </td>               
        <td><h3> $row->nomeEmpresa </td>  
        <td><h3> $row->funcaoExercida</td> 
        <td><h3> $row->numeroVagas</td> 
        <td><h3> $row->conhecimentosNecessarios</td>
        <td><h3> $row->Contato</td> 
            </td>
            
            <tr>
        <th><h3>Sexo:</th>
        <th><h3>Valor da bolsa:</th>
        <th><h3>Duracao da vaga:</th>
        <th><h3>Beneficios:</th>
        <th><h3>Observacoes:</th>
        <th><h3>Horario:</th>    
           </tr>      
        <td><h3> $row->Sexo</td>
        <td><h3> $row->valorBolsa</td>
        <td><h3> $row->DuracaoVaga</td>
        <td><h3> $row->Beneficios</td>
        <td><h3> $row->Observacoes</td>
        <td><h3> $row->HorarioTrabalho<h3>
            </td> 
          <th><h3>N° de vagas:</th>
        ";
        echo "</table>";

        // botão de inscrição
       $idAposentado = $_SESSION['idAposentado'];
        if($_SESSION == isset($_SESSION['aposentadoautonomo'])){
           echo ""; echo "<a class='btn btn-success' href='./autenticarIncrisc.php?iduser=$idAposentado&idvaga=$idVaga'>Inscrever</a>"; echo ""; 
        }else {
          echo "<h2>Para se inscrever, por favor faça login</h3>";
        }

       // botão excluir
        echo ""; 
        if($_SESSION == isset($_SESSION['empresa']))
        {
         if($_SESSION['idEmpresa'] == $row->Empresa_ID ){  
        echo "<a class='btn btn-danger' href='./excluirVaga.php?idvaga=$row->ID'>Excluir vaga</a>  "; 
         }}else{
        
        } }  echo"</div>";
        
       
    
    
    ?>
<br/><br/>
</form>

 <div class="col-sm-1"></div>

 
<br>

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
.btn{
 padding: 15px 120px;
 font-size: 25px;
 color: black;
}
</style>