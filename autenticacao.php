<?php

if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
  session_start();
}

$con =  new PDO("mysql:host=localhost; dbname=pit","root","");

$cpfcnpj= $_POST['cpfcnpj'];

if(strlen(trim($_POST['cpfcnpj'])) == 11) // login cpf
{


    $sql = $con->prepare("SELECT * FROM aposentadoautonomo WHERE CPF=? AND senha=?");
    $sql->execute( array($_POST['cpfcnpj'], md5($_POST['senha']) ) );
    $row = $sql->fetchObject();  // devolve um único registro
    // $id = $con->prepare("SELECT ID FROM aposentadoautonomo where CPF=$cpfcnpj");
    $_SESSION['idAposentado'] = $row->ID; //  atribui o objeto ID do row a uma variavel
    $_SESSION['aposentadoPermissao'] = $row->tipo_usuario;



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

} else if (strlen(trim($_POST['cpfcnpj'])) > 13) // login cnpj
{
    $sql = $con->prepare("SELECT * FROM empresa WHERE CNPJ=? AND senha=?");  
    $sql->execute( array( $_POST['cpfcnpj'], md5($_POST['senha']) ) ); 
    $row = $sql->fetchObject();  // devolve um único registro
    $_SESSION['idEmpresa'] = $row->ID;
    $_SESSION['empresaPermissao'] = $row->tipo_usuario;

      

    if ($row) // Se o usuário foi localizado
    {
        $_SESSION['empresa'] = $row->CNPJ; 
        header("Location: index.php");
    }
    else
    {
        header("Location: login.php");
    } 
} else if ((trim($_POST['cpfcnpj'])) == 'admin')
{
    
    $sql = $con->prepare("SELECT * FROM administrador WHERE nome=? AND senha=?");
    $sql->execute(array( $_POST['cpfcnpj'], md5($_POST['senha'])) );
    $row = $sql->fetchObject();  // devolve um objeto, para verificar oq há nele é so utilizar o var_dump($row);
    // var_dump($_POST, $row); die;
    $_SESSION['idAdmin'] = $row->ID;
    $_SESSION['AdminPermissao'] = $row->tipo_usuario;
}
if ($row) // Se o usuário foi localizado
{

    $_SESSION['Admin'] = $row->nome;
    header("Location: index.php");

}
else
{

    header("Location: login.php");

}

?>