<?php

session_start();



$con =  new PDO("mysql:host=localhost; dbname=pit","root","");

if(strlen($cpfcnpj) < 13)
{

    $sql = $con->prepare("SELECT * FROM aposentadoautonomo WHERE CPF=? AND senha=?");
    $sql->execute( array($_POST['cpfcnpj'], md5($_POST['senha']) ) );

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

else
{
    $sql = $con->prepare("SELECT * FROM empresa WHERE CNPJ=? AND senha=?");  
    $sql->execute( array($_POST['cpfcnpj'], md5($_POST['senha']) ) );

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