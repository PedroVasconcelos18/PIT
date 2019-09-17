<?php

if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
  session_start();
}
if($_SESSION['aposentadoautonomo'])
{
    unset($_SESSION['aposentadoautonomo']);
    header("Location: index.php");
}
elseif($_SESSION['empresa'])
{
    unset($_SESSION['empresa']);
    header("Location: index.php");
}



?>