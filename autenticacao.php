<?php

if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
  session_start();
}

$con =  new PDO("mysql:host=localhost; dbname=pit","root","");

$cpfcnpj = $_POST['cpfcnpj'];

if(strlen(trim($_POST['cpfcnpj'])) == 11) // login cpf
{

    $sql = $con->prepare("SELECT * FROM aposentadoautonomo WHERE CPF=? AND senha=?");
    $sql->execute( array($_POST['cpfcnpj'], md5($_POST['senha']) ) );
    $row = $sql->fetchObject();  // devolve um único registro
    // $id = $con->prepare("SELECT ID FROM aposentadoautonomo where CPF=$cpfcnpj");
    $_SESSION['idAposentado'] = $row->ID; //  atribui o objeto ID do row a uma variavel
   



if ($row) // Se o usuário foi localizado
{
    // var_dump($row); die(); // Verifica o que o objeto row tem dentro
    $_SESSION['aposentadoautonomo'] = $row->CPF; // depois atribui ele a uma variavel
    header("Location: index.php");
}
else
{
    header("Location: login.php");
}

} 
 else if (strlen(trim($_POST['cpfcnpj'])) == 18) // login cnpj
{
    $sql = $con->prepare("SELECT * FROM empresa WHERE CNPJ=? AND senha=?");  
    $sql->execute( array($_POST['cpfcnpj'], md5($_POST['senha']) ) );
    $row = $sql->fetchObject();  // devolve um único registro
    $_SESSION['idEmpresa'] = $row->ID;

      

if ($row) // Se o usuário foi localizado
{
   
    $_SESSION['empresa'] = $row->CNPJ;
    header("Location: index.php");
}
else
{
    header("Location: login.php");
}
}
else if ((trim($_POST['cpfcnpj'])) == 'admin'){
    $sql = $con->prepare("SELECT * FROM adminn WHERE nome=? AND senha=?");  
    $sql->execute( array($_POST['cpfcnpj'], md5($_POST['senha']) ) );
    $row = $sql->fetchObject();  // devolve um único registro
    $_SESSION['idAdmin'] = $row->ID;
}
if ($row) // Se o usuário foi localizado
{
    $_SESSION['admin'] = $row->nome;
    header("Location: index.php");
}
else
{
    header("Location: login.php");
}

?>