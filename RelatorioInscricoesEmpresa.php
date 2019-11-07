<?php


include 'header.php';
include 'nav.php';


?>

<?php
if(isset($_SESSION['empresa']))
{
    include 'conexao.php';
    $idEmpresa =  $_SESSION['idEmpresa'];
    $consulta = "
    SELECT 

    aposentadoautonomo.Nome,
    aposentadoautonomo.Email, 
    v.ID, 
    v.Empresa_ID, 
    v.categoria,
    v.funcaoExercida,
    DATE_FORMAT(aposentadoautonomo.dataNasc,'%d/%m/%Y') as dataNasc
    
    FROM inscricao 
    INNER JOIN vagas as v on v.ID = inscricao.Vagas_ID
    INNER JOIN aposentadoautonomo on aposentadoautonomo.ID = inscricao.AposentadoAutonomo_ID 
    WHERE v.Empresa_ID = $idEmpresa"; 

    if( !empty($_GET['idvaga']) ) { 
        $consulta.=" and v.ID = {$_GET['idvaga']}";
    } 

    // echo $consulta; 
    // Verifica como a consulta está sendo imprimida antes de executar
    
    $sql = $conn->prepare($consulta);
    $sql->execute();
    $rows = $sql->fetchAll(PDO::FETCH_CLASS);
    // var_dump($rows);
    $numeroInsc =+ 1;
    
    if(!empty($rows)){

        
        foreach($rows as $numLinha => $row){
            echo "
            <div class='container-fluid' align='center'>
            
            <div class='col-md-3'></div>
            
            <div class='col-md-6'>
            
            <div class='panel panel-info'>
            <div class='panel-heading'>Inscrição n° " . ($numLinha+1). "</div>
            <div class='panel-body'>
            <b>Nome:</b> $row->Nome
            <br/>
            <b>Email:</b> $row->Email
            <br/>
            <b>Data de nascimento:</b> $row->dataNasc
            <br/>
            <b>Função da vaga:</b> $row->funcaoExercida
            </div>
            </div>
            
            <div class='col-md-3'></div>
            </div>
            </div>
            
            
            </div>
            
            
            </div>";
        }
    }else{
        
        echo " 
    <div class='container-fluid' align='center'>

    <div class='col-md-3'></div>
   
    <div class='col-md-6'>
    
    <h1> Não há usuários inscritos nessa vaga!</h1>

    </div>

   <div class='col-md-3'></div>

   </div>";
          }
}

?>


