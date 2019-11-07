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
        <th><h3>Nome da empresa:</th>
        <th><h3>Função a ser exercida:</th>
        <th><h3>Valor da bolsa:</th>
        <th><h3>Horário de trabalho:</th>
        <th><h3>Conhecimentos necessários:</th>
           </tr>
           
           </td>
        <td><h3> $row->nomeEmpresa </td>  
        <td><h3> $row->funcaoExercida</td> 
        <td><h3> $row->valorBolsa</td> 
        <td><h3> $row->HorarioTrabalho</td>
        <td><h3> $row->conhecimentosNecessarios</td>
            </td>
             </table>


        <div class='textoVaga' align='left'>

         <h3> Duração da vaga: $row->DuracaoVaga</h3>
         <h3> Beneficios: $row->Beneficios</h3>
         <h3> Observações: $row->Observacoes</h3>
         <h3> CEP: $row->CEP</h3>
         <h3> Número da casa: $row->numeroCasa</h3>
         <h3> Contato: $row->Contato</h3>
         
        

        </div>
        ";
       

        // botão de inscrição
       
     

        if( isset($_SESSION['aposentadoautonomo']))
          {
         $idAposentado = $_SESSION['idAposentado'];
       $permissaoAposentado = $_SESSION['aposentadoPermissao'];
          if($permissaoAposentado == 1)
          {
           echo ""; echo "<a class='btn btn-success' href='./autenticarIncrisc.php?iduser=$idAposentado&idvaga=$idVaga'>Inscrever</a>"; echo ""; 
        }else {
          echo "<h2>Para se inscrever, por favor faça login</h3>";
        }
          }
       // botão excluir
        echo ""; 
        if(isset($_SESSION['empresa']))
        {  
         if( $_SESSION['idEmpresa'] == $row->Empresa_ID){  
        echo "<a class='btn btn-danger' href='./excluirVaga.php?idvaga=$row->ID'>Excluir vaga</a> "; 

        echo "<a class='btn btn-info' href='./RelatorioInscricoesEmpresa.php?idvaga=$row->ID'>Inscrições</a> ";
         }
        }else{
        
        } }   echo"</div>";

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