<?php

session_start();

$con =  new PDO("mysql:host=localhost; dbname=pit","root","");
$sql = $con->prepare("SELECT * FROM aposentadoautonomo WHERE CPF=? AND senha=?") or ("SELECT * FROM empresa WHERE cnpj=? AND senha=?");
$sql->execute( array($_POST['CPF'], md5($_POST['senha']) ) );

$row = $sql->fetchObject();  // devolve um único registro

// Se o usuário foi localizado
if ($row){
    $_SESSION['usuario'] = $row;
    header("Location: ../pit/index.php");
}else{
    header("Location: ../pit/login.php");
}
?>