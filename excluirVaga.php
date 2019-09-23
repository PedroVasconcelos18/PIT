<?php include "conexao.php";

$idVaga = $_GET['idvaga'];

try {
    $con = new PDO("mysql:host=localhost;dbname=pit", 'root', '');

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM vagas WHERE ID=$idVaga;";
     include 'header.php'; 
     include 'nav.php';
     $executar = $con->exec($sql);
     $executar;
     if($executar == true){

         echo "
         <div class='container'>
         <br><br><br>
         <h1><div align='center'>Vaga deletada com sucesso</div><h1/>
         
         <form action='empregos.php'>
         <div class='butao' align='center'>
         
         <button class='btn btn-primary btn-md butao' type='submit'>Clique aqui para voltar as vagas</button>
         
         </div>
         </div>
         
         
         </form>";
        }
    }
catch(PDOException $e)
    {
    echo "<div align='center'><h1>Possivelmente há alguém inscrito nessa vaga, favor contatar a equipe de suporte</div>";
    }

$conn = null;
