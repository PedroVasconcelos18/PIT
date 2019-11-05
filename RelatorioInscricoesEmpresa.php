
<?php
include 'header.php';
include 'nav.php';
?>
<div class='container-fluid'>
    


</div>
<?php
if(isset($_SESSION['empresa']))
{
    include 'conexao.php';
    $idEmpresa =  $_SESSION['idEmpresa'];
    $consulta = "
    SELECT 

    aposentadoautonomo.CPF,
    aposentadoautonomo.Nome,
    aposentadoautonomo.Email,  
    v.Empresa_ID, 
    v.categoria,
    v.funcaoExercida
    
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
     var_dump($rows); die();



}







?>