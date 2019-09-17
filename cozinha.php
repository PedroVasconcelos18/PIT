<?php include "header.php";?>
<?php include "nav.php";?>
<?php include "conexao.php";?>
<body>
<div class="container" align="center">
	
   <br/> <h3>Vagas disponíveis</h3><br/>
    
<div class="col-sm-1">

</div>
<table class="col-sm-10" id="table1" align="center">
	
<?php $sql = $conn->prepare("SELECT * FROM vagas GROUP BY categoria = 'Coz';");
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_CLASS);
echo "
<table class='table table-striped'>";
    foreach ($rows as $row) {
        echo "    
        <tr>
        <th>ID</th>
        <th>Nome da empresa:</th>
        <th>Função a ser exercida:</th>
        <th>Endereço:</th>
        <th>N° de vagas:</th>
        <th>Sexo:</th>   
        <th>Duracao vaga:</th>     
                </tr> 
        <td id='id' name='id'> $row->ID</td>               
        <td>  $row->nomeEmpresa</td>  
        <td>  $row->funcaoExercida</td> 
        <td>  $row->endereco</td>  
        <td>  $row->numeroVagas</td> 
        <td>  $row->Sexo</td>
        <td>  $row->DuracaoVaga</td>
        <td>  <button href=''class='btn btn-info'>Ver mais</button> </td>
        </form>
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