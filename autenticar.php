<?php


if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
    session_start();
  }


    $formacad = $_POST["formacad"];
    $reshab = $_POST["reshab"];
    $formcomp = $_POST["formcomp"];
    $expp = $_POST["exppro"];
    $phone = $_POST["phone"];
    $id_aposentado = $_SESSION['idvovo']; // recupera o $_SESSION['idnovo'] da página de curriculo, através do LastId que se encontra no cadastroaposentado.php
   


    try {
        $con = new PDO("mysql:host=localhost;dbname=pit", 'root', '');

        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO curriculo (Id, expProfssi, resumoHabili, formAcadem, formCompl, telefone, AposentadoAutonomo_ID)
        VALUES (NULL, '$expp', '$reshab','$formacad','$formcomp','$phone','$id_aposentado')";
        $con->exec($sql);
        include 'header.php'; 
        include 'nav.php';
        echo "
    
    <div class='container'>
    <br><br><br>
    <h1><div align='center'>Usuário e currículo cadastrados com sucesso, seja bem-vindo!!</div><h1/>

    <form action='login.php'>
    <div class='butao' align='center'>
                <button class='btn btn-primary btn-md butao' type='submit'>Clique aqui para efetuar login</button>
                </div>
    </div>


    </form>";

           

        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }

    $conn = null;


    
    ?>