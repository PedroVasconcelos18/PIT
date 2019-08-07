<?php
session_start();
if($_SESSION['aposentadoautonomo'])
{
    unset($_SESSION['aposentadoautonomo']);
    header("Location: ../pit/index.php");
}
elseif($_SESSION['empresa'])
{
    unset($_SESSION['empresa']);
    header("Location: ../pit/index.php");
}



?>