<?php

if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
  session_start();
}
if($_SESSION['aposentadoautonomo'])
{
    unset($_SESSION['aposentadoautonomo']); 
    header("Location: index.php");
    exit;
}
elseif($_SESSION['empresa'])
{
    unset($_SESSION['empresa']); 
    header("Location: index.php");
    exit;
}
elseif($_SESSION['Admin'])
{
    session_destroy();
    header("Location: index.php");
    exit;
}

?>