<?php include "header.php";?>
<?php include "nav.php";?>
<?php include "conexao.php";?>
<body>
<div class="container" align="center">
	
   <br/> <h3>Vagas disponíveis</h3><br/>
    
<div class="col-sm-1">

</div>
<table class="col-sm-10" id="table1" align="center">
	
<?php $sql = $conn->prepare("SELECT * FROM ver_vagas;");
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_CLASS);
echo "<form action='vagacompleta.php'>
<table class='table table-striped'>";
    foreach ($rows as $row) {
        echo "      <tr>  
        <tr>
        <th>ID</th>
        <th>Nome da empresa:</th>
        <th>Função a ser exercida:</th>
        <th>Endereço:</th>
        <th>N° de vagas:</th>
        <th>Conhecimentos Necessários:</th>      
                </tr>     
        <td id='id' name='id'>  $row->ID</td>               
        <td>  $row->Nome_da_empresa</td>  
        <td>  $row->Funcao_a_ser_exercida</td> 
        <td>  $row->Endereco</td>  
        <td>  $row->N_de_vagas</td> 
        <td>  $row->Conhecimentos_necessarios</td>
        <td>  <button href=''class='btn btn-info'>Ver mais</button> </td>
        </form>
        ";
    }
    echo "</table>";
    ?>
<br/><br/>


<div class="col-sm-1"></div>

</div>
<br>
<div class="container" align="center">
<button class="btn btn-success">Incrição</button>
<button class="btn btn-success">Excluir</button>
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
</style>