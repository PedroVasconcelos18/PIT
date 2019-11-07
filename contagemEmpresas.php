 

<?php include "header.php";?>
<?php include "nav.php";?>
<?php include "conexao.php";?>
<?php// include "classCPFCNPJ/class-valida-cpf-cnpj.php"; ?>

<?php if( isset( $_SESSION['AdminPermissao'] ) )  { 
        if( $_SESSION['AdminPermissao'] == 0 ) { ?>
        
        <body>
        <div class="container" align="center">
   <br/> <h3>Empresas cadastradas até o momento</h3><br/>
</div>  
<div class='container' align='center'>
<div class="col-sm-1"></div>

<?php 

$sql = $conn->prepare("SELECT * FROM empresas_cadastradas");
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_CLASS);
echo "<table class='col-sm-10' id='table1'>";
foreach($rows as $row) 
{        

echo "
                <tr>
        <th><h8>ID da empresa</th>
        <th><h8>Nome da empresa:</th>
        <th><h8>Telefone da empresa:</th>
        <th><h8>Ramo da empresa:</th>
                </tr>  
        <td class='conteudo'><h8> $row->ID_da_empresa </td>                            
        <td class='conteudo'><h8> $row->Nome_da_empresa </td>  
        <td class='conteudo'><h8> $row->Telefone_da_empresa</td> 
        <td class='conteudo'><h8> $row->Ramo_da_empresa</td> 
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
</style>

<?php } } else {  ?>
    
    <div class='container-fluid' align='center'><h1>Opss!! Parece que você se enganou de página.</h1></div>

<br><br>
<div class="col-sm-1"></div>
<div class="col-sm-10" align='center'>
    <a href="index.php" class="btn btn-success"><h3>Clique aqui para voltar a página inicial</h3></a>
    <br/>
</div>
    
    
    
    
<?php }  ?> 


