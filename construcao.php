<?php include "header.php";?>
<?php include "nav.php";?>
<?php include "conexao.php";?>
<body>
<div class="container" align="center">
	
   <br/> <h3>Vagas disponíveis</h3><br/>
    
<div class="col-sm-1" id="id">

</div>
<table class="col-sm-10" id="table1" align="center">
	
<?php $sql = $conn->prepare("SELECT * FROM vagas WHERE categoria = 'Construc';");
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_CLASS);
// var_dump($rows); die();
echo "
<table class='table table-striped'>";
    foreach ($rows as $row) {
      
        echo "    
       
        <tr>
        <th>ID</th>
        <th>Nome da empresa:</th>
        <th>Função a ser exercida:</th>
        <th>N° de vagas:</th>
        <th>Sexo:</th>   
        <th>Duracao vaga:</th>     
        </tr> 

        <td>  $row->ID</td>               
        <td>  $row->nomeEmpresa</td>  
        <td>  $row->funcaoExercida</td>   
        <td>  $row->numeroVagas</td> 
        <td>  $row->Sexo</td>
        <td>  $row->DuracaoVaga</td>
        <td>  <a class='btn btn-primary' href='./vagacompleta.php?id=$row->ID'>Ver mais</a> 
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
</style>