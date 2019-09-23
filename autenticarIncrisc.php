<?php include "conexao.php";

$idUser = $_GET['iduser'];
$idVaga = $_GET['idvaga'];

// $sql = $conn->prepare("INSERT INTO inscricao ");
// $sql->execute();´

try {
    $con = new PDO("mysql:host=localhost;dbname=pit", 'root', '');

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO inscricao (Id, Vagas_ID, AposentadoAutonomo_ID) VALUES (NULL, '$idVaga', '$idUser')";
     include 'header.php'; 
     include 'nav.php';
    echo "
<div class='container'>
<br><br><br>
<h1><div align='center'>Inscrição cadastrada com sucesso</div><h1/>

<form action='empregos.php'>
<div class='butao' align='center'>

            <button class='btn btn-primary btn-md butao' type='submit'>Clique aqui para voltar as vagas</button>
            
            </div>
</div>


</form>";

       $con->exec($sql);

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
