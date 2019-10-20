 

<?php include "header.php";?>
<?php include "nav.php";?>
<?php include "conexao.php";?>
<?php// include "classCPFCNPJ/class-valida-cpf-cnpj.php"; ?>
<body>
<div class="container" align="center">
   <br/> <h3>Usuários cadastrados até o momento</h3><br/>
</div>  
<div class='container' align='center'>
<div class="col-sm-1"></div>

<?php 
//  $sql = $conn->prepare("SELECT * FROM empresa");

$sql = $conn->prepare("SELECT * FROM aposentados_autonomos_cadastrados");
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_CLASS);
echo "<table class='col-sm-10' id='table1'>";
foreach($rows as $row)
{        
$data = $row->dataCadastro;
// echo $data; die();
// date('d/m/Y', strtotime($data));  die();
echo "
                <tr>
        <th><h8>ID do usuário</th>
        <th><h8>CPF do usuário:</th>
        <th><h8>Nome do usuário:</th>
        <th><h8>Email do usuário:</th>
        <th><h8>Data do cadastro do usuário:</th>
                </tr>  
        <td class='conteudo'><h8> $row->ID</td>               
        <td class='conteudo'><h8> $row->CPF	 </td>  
        <td class='conteudo'><h8> $row->Nome</td> 
        <td class='conteudo'><h8> $row->Email</td> 
        <td class='conteudo'><h8> $row->dataCadastro</td>
       
    
";
}
    ?> 
<br>
</table>
<div class="col-sm-1"></div>
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
.btn{
 padding: 15px 120px;
 font-size: 25px;
 color: black;
}
.conteudo{
   float: center; 
}
