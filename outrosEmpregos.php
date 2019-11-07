<?php include "header.php";?>
<?php include "nav.php";?>
<?php include "conexao.php";?>
<body>
<div class="container" align="center">
	
   <br/> <h3>Vagas disponíveis</h3><br/>
    
<div class="col-sm-1" id="id">

</div>
<table class="col-sm-10" id="table1" align="center">
	
<?php $sql = $conn->prepare("SELECT * FROM vagas WHERE categoria = 'Outros';");
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
        <th><h3>Sexo:</th>   
        <th><h3>Duracao vaga:</th>     
        </tr> 

        <td><h3>  $row->ID</td>               
        <td><h3>  $row->nomeEmpresa</td>  
        <td><h3>  $row->funcaoExercida</td>   
        <td><h3>  $row->numeroVagas</td> 
        <td><h3>  $row->Sexo</td>
        <td><h3>  $row->DuracaoVaga</td>
        <td>  <div class='verMais'  align='center'><a class='btn btn-primary' href='./vagacompleta.php?id=$row->ID'>Ver mais</a> </div>
        </td>
        ";
        
    }
    echo "</table><br>";

    ?>
<br/><br/>


<div class="col-sm-1"></div>

</div>
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
.verMais{
  margin-top: 11.5px;
}
</style>