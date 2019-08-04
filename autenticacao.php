<?php

session_start();
$cpfcnpj = $_POST["cpfcnpj"];
$senha = $_POST["senha"];


$con =  new PDO("mysql:host=localhost; dbname=pit","root","");

if(strlen($cpfcnpj) < 12)
{

    $sql = $con->prepare("SELECT * FROM aposentadoautonomo WHERE CPF=? AND senha=?");
    $sql->execute( array($cpfcnpj, md5($senha) ) );

    $row = $sql->fetchObject();  // devolve um único registro

// Se o usuário foi localizado
if ($row)
{
    $_SESSION['aposentadoautonomo'] = $row;
    header("Location: ../pit/index.php");
}
else
{
    header("Location: ../pit/login.php");
}

} 

if (strlen($cpfcnpj) > 12)
{
    $sql = $con->prepare("SELECT * FROM empresa WHERE CNPJ=? AND senha=?");  
    $sql->execute( array($cpfcnpj, md5($senha) ) );

    $row = $sql->fetchObject();  // devolve um único registro

// Se o usuário foi localizado
if ($row)
{
    $_SESSION['empresa'] = $row;
    header("Location: ../pit/index.php");
}
else
{
    header("Location: ../pit/login.php");
}
}

?>